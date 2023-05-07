<?php

namespace App\Http\Controllers;

use App\Events\SendMessageEvent;
use App\Http\Resources\MessageResource;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        return MessageResource::collection(Message::with('user')->paginate(100));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'text' => ['string', 'required']
        ]);

        $message = $request->user()->messages()->create($data);

        $message->load('user');

        SendMessageEvent::dispatch($message);
    }
}
