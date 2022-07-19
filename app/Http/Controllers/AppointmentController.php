<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\cancel;
use App\Mail\WelcomeMail;
use App\Models\Appointment;
use App\Models\Contact;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use PhpParser\Node\Stmt\TryCatch;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appointments = Appointment::orderBy('id', 'desc')->get();
        $count = Contact::count();
        $messages = Contact::paginate(5);
        return view('BJMP.admin.appointment.pending.index', compact('appointments', 'count', 'messages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Appointment::create(
            $request->all()
        );
        return redirect()->route('appointment');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        try {
            $id = $request->input('id');
            $appointment = Appointment::findOrFail($id);

            $details = [
                'name' => $appointment->first_name . ' ' . $appointment->middle_name . ', ' . $appointment->last_name,
                'age' =>  $appointment->age,
                'address' => $appointment->address,
                'date' => $appointment->date,
                'prisoner_name' => $appointment->prisoner_name,
                'relationship' => $appointment->prisoner_relationship,
                'number' => $appointment->phone_number,
            ];

            $data = [

                'api_key' => "2BWiJ9Bke4zGymsjOTS5CaebKki",
                'api_secret' => "x52BicQo6crbVYufk509UcgxyrfBFJsPoFyxY0kF",
                'text' => "Hello! I would like to say that your Request Appointment has been cancel, kindly check our website for more schedule Thank you",
                'to' =>   "63" . Str::substr($appointment->phone_number, 1, 10), // replace with mobile number ng sesendan
                'from' => "MOVIDER"

                /*   'api_key' => "2BWiJ9Bke4zGymsjOTS5CaebKki",
        'api_secret' => "x52BicQo6crbVYufk509UcgxyrfBFJsPoFyxY0kF",
            'to' =>   "63" . Str::substr($appointment->phone_number, 1, 10), // replace with mobile number ng sesendan
            'text' => "Congratulations your appointment has been approved. Thank you!", // Text message mo
            'from' => "Mail from Municipal Jail of Los Banos" */ // Y0u need paid account para palitan ito.
            ];

            $response = Http::asForm()->post('https://api.movider.co/v1/sms', $data);
            Mail::to($appointment->email)->send(new cancel($details));
            $appointment->delete();
            toast()->info('Info', 'You deleted the request')->autoClose(3000)->animation('animate__fadeInRight', 'animate__fadeOutRight')->width('400px');
            return redirect()->back();
        } catch (\Throwable $th) {
            toast()->warning('Warning', $th->getMessage())->autoClose(3000)->animation('animate__fadeInRight', 'animate__fadeOutRight')->width('400px');
            return redirect()->back();
        }




        return redirect()->route('pending.index');
    }
}
