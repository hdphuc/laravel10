<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Pusher\Pusher;

class PusherWebhookController extends Controller
{
     public function handleWebhook(Request $request)
    {
        // Lấy thông tin từ request của Pusher
        $event = $request->header('X-Pusher-Event');
        $data = json_decode($request->getContent(), true);
        
        // Xử lý sự kiện tương ứng
        switch ($event) {
            case 'channel_occupied':
                // xử lý khi channel bắt đầu có người tham gia
                break;
            case 'channel_vacated':
                // xử lý khi channel không còn ai tham gia
                break;
            case 'client_event':
                // xử lý khi có client gửi event đến channel
                break;
            default:
                // xử lý các sự kiện khác (ví dụ: pusher:subscription_succeeded)
                break;
        }
        
        return response()->json($data);
    }
}
