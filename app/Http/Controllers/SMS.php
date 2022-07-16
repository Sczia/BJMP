<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SMS extends Controller
{
    public function sendSmsNotificaition()
    {

        $curl = curl_init();
        $data = array(
            'api_key' => "2BWiJ9Bke4zGymsjOTS5CaebKki",
            'api_secret' => "x52BicQo6crbVYufk509UcgxyrfBFJsPoFyxY0kF",
            'text' => "Hello! Congratulations your Request Appointment has been approved.",
            'to' => "639512370553",
            'from' => "MOVIDER"
        );

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.movider.co/v1/sms",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => http_build_query($data),
            CURLOPT_HTTPHEADER => array(
                "Content-Type: application/x-www-form-urlencoded",
                "cache-control: no-cache"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            echo $response;
        }





        // Movider
        /*  $data = array(
        'api_key' => "2BWiJ9Bke4zGymsjOTS5CaebKki",
        'api_secret' => "x52BicQo6crbVYufk509UcgxyrfBFJsPoFyxY0kF",
        'to' => "639512370553", // replace with mobile number ng sesendan
        'text' => "Hello World.", // Text message mo
        'from' => "Krysia Lee" // Y0u need paid account para palitan ito.
    );

  $response= Http::asForm()->post('https://api.movider.co/v1/sms',$data); */
    }
}
