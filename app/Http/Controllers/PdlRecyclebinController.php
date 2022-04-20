<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Pdl;
use App\Models\PdlRecyclebin;
use Illuminate\Http\Request;

class PdlRecyclebinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records=PdlRecyclebin::all();
        $count=Contact::count();
        $messages = Contact::paginate(5);
        return view('BJMP.admin.recyclebin.pdl.index',compact('records','count','messages'));
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
        /* dd($request->all()); */
        $record = new PdlRecyclebin;
        $record->name = $request->input('name');
        $record->birth_date = $request->input('birth_date');
        $record->address = $request->input('address');
        $record->religion = $request->input('religion');
        $record->civil_status= $request->input('civil_status');
        $record->built = $request->input('built');
        $record->complexion = $request->input('complexion');
        $record->eye_color = $request->input('eye_color');
        $record->sex = $request->input('sex');
        $record->blood_type = $request->input('blood_type');
        $record->educational_attainment = $request->input('educational_attainment');
        $record->date_of_commitment = $request->input('date_of_commitment');
        $record->offense = $request->input('offense');
        $record->case_number = $request->input('case_number');
        $record->deleted_date = date('m'.'/'.'d'.'/'.'Y');
        $record->save();
        $id = $request->input('id');
        $pdl = Pdl::findOrFail($id);
        $pdl->delete();
        return redirect()->route('pdl.index');
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

        $pdl =PdlRecyclebin::find($id);
        $pdl->delete();
        return redirect()->route('pdl.recyclebin.index');
    }
}
