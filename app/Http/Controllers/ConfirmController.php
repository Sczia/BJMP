<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use Illuminate\Http\Request;
use App\Mail\welcome;
use App\Models\Appointment;
use App\Models\Confirm;
use App\Models\Contact;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Nexmo\Laravel\Facade\Nexmo;

class ConfirmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appointments = Confirm::all();
        $count = Contact::count();
        $messages = Contact::paginate(5);
        return view('BJMP.admin.appointment.confirm.index', compact('appointments', 'count', 'messages'));
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
        try {
            $id = $request->input('id');
            $appointment = Appointment::find($id);
            //code...
            $confirm = new Confirm;
            $confirm->first_name = $appointment->first_name;
            $confirm->last_name = $appointment->last_name;
            $confirm->middle_name = $appointment->middle_name;
            $confirm->age = $appointment->age;
            $confirm->gender = $appointment->gender;
            $confirm->email = $appointment->email;
            $confirm->address = $appointment->address;
            $confirm->date = $appointment->date;
            $confirm->prisoner_name = $appointment->prisoner_name;
            $confirm->dorm_number = $appointment->dorm_number;
            $confirm->prisoner_relationship = $appointment->prisoner_relationship;
            $confirm->phone_number = $appointment->phone_number;
            $confirm->health_poll = $appointment->health_poll;

            $confirm->temp = $appointment->temp;
            $confirm->resp = $appointment->resp;
            $confirm->eq_resp = $appointment->eq_resp;
            $confirm->travel = $appointment->travel;
            $confirm->eq_travel = $appointment->eq_travel;
            $confirm->history = $appointment->history;
            $confirm->eq_history = $appointment->eq_history;
            $confirm->hospital = $appointment->hospital;
            $confirm->eq_hospital = $appointment->eq_hospital;
            $confirm->public = $appointment->public;
            $confirm->eq_public = $appointment->eq_public;
            $confirm->close = $appointment->close;
            $confirm->front = $appointment->front;
            $confirm->eq_front = $appointment->eq_front;
            $confirm->place = $appointment->place;
            $confirm->eq_place = $appointment->eq_place;


            $confirm->save();
            $details = [
                'name' => $appointment->first_name . ' ' . $appointment->middle_name . ', ' . $appointment->last_name,
                'age' =>  $appointment->age,
                'address' => $appointment->address,
                'date' => $appointment->date,
                'prisoner_name' => $appointment->prisoner_name,
                'relationship' => $appointment->prisoner_relationship,
                'number' => $appointment->phone_number,
            ];
            $response = Nexmo::message()->send([
                'to'   => "63" . Str::substr($appointment->phone_number, 1, 10),
                'from' => '09512370553',
                'text' => "Good Day! Congratulations, your request for an appointment on the BJMP Los Banos has been approved. Kindly check your email for the confirmation and make a screenshot of it as proof. Thank you and stay safe! "
            ]);
            Mail::to($request->input('email'))->send(new WelcomeMail($details));

            $pending = Appointment::findOrFail($id);
            $pending->delete();

            toast()->success('Success', 'You confirmed the request')->autoClose(3000)->animation('animate__fadeInRight', 'animate__fadeOutRight')->width('400px');
            return redirect()->route('confirm.index');
        } catch (\Throwable $th) {
            toast()->warning('Warning', $th->getMessage())->autoClose(3000)->animation('animate__fadeInRight', 'animate__fadeOutRight')->width('400px');
            return redirect()->back();
        }
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
        $confirm = Confirm::findOrFail($id);
        $confirm->delete();
        return redirect()->route('confirm.index');
    }
}
