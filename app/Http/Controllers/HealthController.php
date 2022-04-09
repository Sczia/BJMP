<?php

namespace App\Http\Controllers;



use App\Mail\WelcomeMail;
use App\Models\Health;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HealthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $health = Health::all();
        return view('BJMP.admin.health.index', compact('health'));
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
        $details = [
            'title' => 'Mail from Municipal Jail of Los Banos',
            'body' => 'Congratulations your appointment has been approved.  Thank you!'
        ];


        Mail::to( $request->input('email'))->send(new WelcomeMail($details));

        $id = $request->input('id');
        $health = Health::findOrFail($id);
        $health->delete();






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
    public function destroy($id, Request $request)
    {
        $id=$request->input('id');
        $health =Health::findOrFail($id);
        $health->delete();
        return redirect()->route('health.index');
    }
}
