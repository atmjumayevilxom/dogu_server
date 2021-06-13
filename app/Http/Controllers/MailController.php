<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\CallbackAdded;

class MailController extends Controller
{
    public function callbackAdded(Request $request) {

        $validate = Validator::make($request->toArray(), [
            'name' => 'required|min:4|string',
            'phone' => 'required|min:9'
        ]);

        if ($validate->fails()) {
            return back()->with(['error' => $validate->errors()]);
        }

        $validated = $validate->validate();

        $apiToken = config('telegram.api_token');
        $text = "New lead\nName: " . $validated['name'] . "\nPhone: " . $validated['phone'];

        $data = [
            'chat_id' => config('telegram.chat_id'),
            'text' => $text,
        ];

        $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data));

        if (json_decode($response)->ok) {
            return back()->with(['success' => 'Message has been sent successfully!']);
        }
        return back()->with(['error' => 'Serverda xatolik ro\'y berdi. Iltimos, qayta urinib ko\'ring.']);
    }
}
