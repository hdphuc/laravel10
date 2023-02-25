<!DOCTYPE html>
<html>
<head>
    <title>Chatbot</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Chatbot</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div id="chat-window" style="height: 300px; overflow-y: scroll;">
                                    @foreach($chats as $chat)
                                        <div class="row">
                                            <div class="col-md-12">
                                                <strong>{{ $chat->user_name }}</strong>: {{$chat->message }}
</div>
</div>
@endforeach
</div>
</div>
</div>
<hr>
<div class="row">
<div class="col-md-12">
<form id="message-form" method="post" action="{{ route("chat.send.message") }}">
@csrf
<div class="form-group">
<label for="message">Message:</label>
<input type="text" class="form-control" id="message" name="message">
</div>
<button type="submit" class="btn btn-primary">Send</button>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
 <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <script>
        Pusher.logToConsole = true;

        const pusher = new Pusher('{{ config('broadcasting.connections.pusher.key') }}', {
            cluster: '{{ config('broadcasting.connections.pusher.options.cluster') }}',
            encrypted: true
        });

        const channel = pusher.subscribe('chat');

        channel.bind('new-message', function(data) {
            const chatWindow = document.querySelector('#chat-window');

            const div = document.createElement('div');
            div.classList.add('row');

            const col = document.createElement('div');
            col.classList.add('col-md-12');

            const strong = document.createElement('strong');
            strong.textContent = data.user_name + ': ';

            const span = document.createElement('span');
            span.textContent = data.message;

            col.appendChild(strong);
            col.appendChild(span);
            div.appendChild(col);

            chatWindow.appendChild(div);

            chatWindow.scrollTop = chatWindow.scrollHeight;
        });
    </script>
</body>
</html>
