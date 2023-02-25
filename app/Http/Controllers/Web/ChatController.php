<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Pusher\Pusher;
use App\Models\Chat;
use App\Events\NewChatMessage;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
public function index(Request $request)
{
	$chats = Chat::orderBy('created_at', 'desc')->paginate(10);
	 return view('chat', ['chats' => $chats]);
}
public function sendMessage(Request $request)
    {
        $user = Auth::user();

$chat = new Chat();
        $chat->user_id = $user->id ?? 1;
        $chat->user_name = $user->name ?? 'admin';
        $chat->message = $request->input('message');
        $chat->save();

        $pusher = new Pusher(
            config('pusher.PUSHER_APP_KEY'),
            config('pusher.PUSHER_APP_SECRET'),
            config('pusher.PUSHER_APP_ID'),
            [
                'cluster' => config('pusher.PUSHER_APP_CLUSTER'),
                'useTLS' => true,
            ]
        );

        $data = [
            'user_id' => $user->id ?? 1,
            'user_name' => $user->name ?? 'admin',
            'message' => $request->input('message'),
        ];

        $pusher->trigger('chat', 'new-message', $data);

event(new NewChatMessage($chat));

        return redirect()->route('chat.index');
    }
}
