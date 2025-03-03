<?php

namespace App\Http\Controllers;

use App\Events\webhookReceived;
use Illuminate\Http\Request;

class webhookController extends Controller
{
    public function handle(Request $request)
    {
        $data = $request->all();

        // Broadcast event ke frontend
        broadcast(new webhookReceived($data));

        return response()->json(['message' => 'Data received and broadcasted']);
    }
}
