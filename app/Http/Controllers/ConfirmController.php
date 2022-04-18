<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\WelcomeEmail;
use App\Mail\WelcomeMail;
use App\Models\Appointment;
use App\Models\Confirm;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

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
        $count=Contact::count();
        $messages = Contact::paginate(5);
        return view('BJMP.admin.appointment.confirm.index', compact('appointments','count','messages'));
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

        $confirm = new Confirm;
        $confirm->first_name = $request->input('first_name');
        $confirm->last_name = $request->input('last_name');
        $confirm->middle_name = $request->input('middle_name');
        $confirm->age = $request->input('age');
        $confirm->gender = $request->input('gender');
        $confirm->email = $request->input('email');
        $confirm->address = $request->input('address');
        $confirm->date = $request->input('date');
        $confirm->prisoner_name = $request->input('prisoner_name');
        $confirm->prisoner_relationship = $request->input('prisoner_relationship');
        $confirm->phone_number = $request->input('phone_number');
        $confirm->health_poll = $request->input('health_poll');

        $confirm->temp= $request->input('temp');
        $confirm->resp= $request->input('resp');
        $confirm->eq_resp= $request->input('eq_resp');
        $confirm->travel= $request->input('travel');
        $confirm->eq_travel= $request->input('eq_travel');
        $confirm->history= $request->input('history');
        $confirm->eq_history= $request->input('eq_history');
        $confirm->hospital= $request->input('hospital');
        $confirm->eq_hospital= $request->input('eq_hospital');
        $confirm->public= $request->input('public');
        $confirm->eq_public= $request->input('eq_public');
        $confirm->close= $request->input('close');
        $confirm->front= $request->input('front');
        $confirm->eq_front= $request->input('eq_front');
        $confirm->place= $request->input('place');
        $confirm->eq_place= $request->input('eq_place');


        $confirm->save();
        $details = [
            'title' => 'Mail from Municipal Jail of Los Banos',
            'body' => 'Congratulations your appointment has been approved.  Thank you!'

        ];


        Mail::to( $request->input('email'))->send(new WelcomeMail($details));

        $id = $request->input('id');
        $pending = Appointment::findOrFail($id);
        $pending->delete();

$confirm=Confirm::find($id);




        return redirect()->route('confirm.index');
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
      $id=$request->input('id');
        $confirm =Confirm::findOrFail($id);
        $confirm->delete();
        return redirect()->route('confirm.index');
    }
}
