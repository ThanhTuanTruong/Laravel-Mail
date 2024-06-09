<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\NewMessageReceivedXmail;
use Exception;
use Illuminate\Support\Facades\Mail;

class XmailController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'name' => 'required',
            'message' => 'required'
        ]);

        $data = [
            'name' => $request->namespace,
            'email' => $request->email,
            'message' => $request->message
        ];

        try {
            Mail::to(config('mail.from.address'))->send(new NewMessageReceivedXmail($data));
        } catch (Exception $e) {
            return redirect()->back()->with([
                'success' => false,
                'message' => 'Email not sent! Reason: ' . $e->getMessage()
            ]);
        }

        return redirect()->back()->with([
            'success' => true,
            'message' => 'Email sent successfully'
        ]);
    }
}
