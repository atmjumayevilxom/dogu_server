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

        Mail::to('hakimovtohirbek@gmail.com')
            ->send(new CallbackAdded((object)$validate->validate()));

        return back()->with(['success' => 'Message has been sent successfully!']);
    }
}
