<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Http;

class SMS extends Controller
{
    public function sendSmsNotificaition()
    {
    // Movider
    $data = [
    'api_key' =>'24uYdd3CINZrkd4yyWCY8qh0MuK', // API KEY
    'api_secret' => 'GwtTzi1W9hJSUG6VZrRZVRKdif3cjHJLrvNIej13', // API SECRET
    'to' => "639355563898", // replace with mobile number ng sesendan
    'text' => "Hello World.", // Text message mo
    'from' => "Krysia Lee" // Y0u need paid account para palitan ito.
     ];


  $response= Http::asForm()->post('https://api.movider.co/v1/sms',$data);


    }
}
