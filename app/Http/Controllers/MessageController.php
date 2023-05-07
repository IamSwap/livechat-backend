<?php

namespace App\Http\Controllers;

use App\Events\SendMessageEvent;
use Illuminate\Http\Request;

class MessageController extends Controller
{
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
