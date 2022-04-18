<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Medical;
use App\Models\MedicalRecyclebin;

class MedicalRecyclebinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records=MedicalRecyclebin::all();
        $count=Contact::count();
        $messages = Contact::paginate(5);
        return view('BJMP.admin.recyclebin.medical.index',compact('records','count','messages'));
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
        $record = new MedicalRecyclebin();
        $record->name = $request->input('name');
        $record->birthdate = $request->input('birthdate');
        $record->age = $request->input('age');
        $record->address = $request->input('address');
        $record->emergency_contact = $request->input('emergency_contact');
        $record->relationship = $request->input('relationship');
        $record->allergies = $request->input('allergies');
        $record->current_medication = $request->input('current_medication');
        $record->current_health_status = $request->input('current_health_status');
        $record->medical_history = $request->input('medical_history');
        $record->deleted_date = date('m'.'/'.'d'.'/'.'Y');
        $record->save();
        $id = $request->input('id');
        $medical = Medical::findOrFail($id);
        $medical->delete();
        return redirect()->route('medical.index');
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
    public function destroy($id)
    {

        $medical =MedicalRecyclebin::find($id);
        $medical->delete();
        return redirect()->route('medical.recyclebin.index');
    }
}
