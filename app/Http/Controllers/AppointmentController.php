<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
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

        $id = $request->input('id');
        $appointment = Appointment::findOrFail($id);
        $details = [
            'title' => 'Mail from Municipal Jail of Los Banos',
            'body' => 'Sorry your appointment is not approved, maybe your chosen Dorm is not fit to the given schedule, Kindly wait for the vacancy of the schedule and check our official website for more information. Thank you and Stay safe!'

        ];

        $data = [
            'api_key' => '24uYdd3CINZrkd4yyWCY8qh0MuK', // API KEY
            'api_secret' => 'GwtTzi1W9hJSUG6VZrRZVRKdif3cjHJLrvNIej13', // API SECRET
            'to' =>   "63" . Str::substr($appointment->phone_number, 1, 10), // replace with mobile number ng sesendan
            'text' => "Congratulations your appointment has been approved. Thank you!", // Text message mo
            'from' => "Mail from Municipal Jail of Los Banos" // Y0u need paid account para palitan ito.
        ];
        try {
            $response = Http::asForm()->post('https://api.movider.co/v1/sms', $data);
            Mail::to($appointment->email)->send(new WelcomeMail($details));
        } catch (\Throwable $th) {
            dd($th);
        }



        $appointment->delete();
        return redirect()->route('pending.index');
    }
}
