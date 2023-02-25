<!DOCTYPE html>
<html>
<head>
    <title>Chat Bot</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta3/css/bootstrap.min.css" />
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <script>
        Pusher.logToConsole = true;

        var pusher = new Pusher('{{env("PUSHER_APP_KEY")}}', {
            cluster: '{{env("PUSHER_APP_CLUSTER")}}'
        });

        var channel = pusher.subscribe('chat');
        channel.bind('new-message', function(data) {
            appendMessage(data);
        });

        function sendMessage() {
            var message = $('#message').val();

            $.post('/send-message', {
                message: message,
                _token: '{{csrf_token()}}'
            });

            $('#message').val('');
        }

        function appendMessage(data) {
            var html = `
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">${data.name}</h5>
                        <p class="card-text">${data.message}</p>
                        <p class="card-text"><small class="text-muted">${data.time}</small></p>
                    </div>
                </div>
            `;

            $('#messages').append(html);
        }
    </script>
</head>
<body>
    <div class="container">
        <div class="fixed-bottom">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#chatModal">
                Chat
            </button>
        </div>
        <div class="modal fade" id="chatModal" tabindex="-1" aria-labelledby="chatModalLabel" aria-hidden="true">
            <div class="modal-dialog">
               
<div class="modal-content">
                       <div class="modal-header">
                           <h5 class="modal-title" id="chatModalLabel">Chat Bot</h5>
                           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                       </div>
                       <div class="modal-body">
                           <div id="messages">
                           </div>
                           <div class="input-group mt-3">
                               <input type="text" class="form-control" id="message" placeholder="Type your message...">
                               <button class="btn btn-primary" type="button" onclick="sendMessage()">Send</button>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta3/js/bootstrap.min.js"></script>
   </body>
   </html>
