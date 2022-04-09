<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Pdl;
use Illuminate\Http\Request;

class PdlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records=Pdl::all();
        $count=Contact::count();
        $messages = Contact::paginate(5);
        return view('BJMP.admin.records.pdl.index',compact('records','count','messages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $records=Pdl::all();
        return view('BJMP.admin.records.pdl.pdf',compact('records'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pdl::create(
            $request->all()
        );
        return redirect()->back();
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
    public function update($id)
    {

        $pdl = Pdl::findOrFail($id);
        $pdl->update(
            Request()->all()
        );




        return redirect()->route('pdl.index');

       /*  $pdl->name = $request->input('name');
        $pdl->birthdate = $request->input('birthdate');
        $pdl->address = $request->input('address');
        $pdl->religion = $request->input('religion');
        $pdl->civil_status = $request->input('civil_status');
        $pdl->built= $request->input('built');
        $pdl->complexion = $request->input('complexion');
        $pdl->eye_color = $request->input('eye_color');
        $pdl->sex = $request->input('sex');
        $pdl->blood_type = $request->input('blood_type');
        $pdl->educational_attainment = $request->input('educational_attainment');
        $pdl->date_of_commitment = $request->input('date_of_commitment');
        $pdl->offense = $request->input('offense');
        $pdl->case_number = $request->input('case_number'); */


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
