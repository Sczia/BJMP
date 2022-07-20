<?php

namespace App\Http\Controllers;

use App\Mail\reply;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;


class MailController extends Controller
{
    public function sendmail()
    {
        $details = [
            'title' => 'Mail from Municipal Jail of Los Banos',
            'body' => 'Congratulations your appointment has been approved.  Thank you!'

        ];


        Mail::to("krysialee023@gmail.com")->send(new WelcomeMail($details));
        return "Email Sent";
    }



    public function reply(Request $request)
    {
        $details = [
            'title' => 'Message from Municipal Jail of Los Banos',
            'body' => $request->input('reply')
        ];
        Mail::to($request->input('email'))->send(new reply($details));
        return back();
    }
}
