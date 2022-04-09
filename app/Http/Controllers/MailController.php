<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

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
}
