<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Pdl;
use App\Models\PdlRecyclebin;
use Illuminate\Http\Request;
use PhpOffice\PhpWord\TemplateProcessor;

class PdlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = Pdl::all();
        $count = Contact::count();
        $messages = Contact::paginate(5);
        return view('BJMP.admin.records.pdl.index', compact('records', 'count', 'messages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $records = Pdl::all();
        return view('BJMP.admin.records.pdl.pdf', compact('records'));
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
           Pdl::create(

                $request->all()

            );
            toast()->success('Success', 'You added a new record')->autoClose(3000)->animation('animate__fadeInRight', 'animate__fadeOutRight')->width('400px');
            return redirect()->back();
        } catch (\Throwable $th) {
            toast()->warning('Info', 'You did not input any record ')->autoClose(3000)->animation('animate__fadeInRight', 'animate__fadeOutRight')->width('400px');
            return redirect()->back();
         }

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



        return redirect()->route('pdl.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pdl = Pdl::find($id);
        $pdlrecyclebin = new PdlRecyclebin();

         $pdlrecyclebin->name = $pdl->name;
         $pdlrecyclebin->birth_date = $pdl->birth_date;
         $pdlrecyclebin->address = $pdl->address;
         $pdlrecyclebin->religion = $pdl->religion;
         $pdlrecyclebin->civil_status = $pdl->civil_status;
         $pdlrecyclebin->built = $pdl->built;
         $pdlrecyclebin->complexion = $pdl->complexion;
         $pdlrecyclebin->eye_color = $pdl->eye_color;
         $pdlrecyclebin->sex = $pdl->sex;
         $pdlrecyclebin->blood_type = $pdl->blood_type;
         $pdlrecyclebin->educational_attainment = $pdl->educational_attainment;
         $pdlrecyclebin->date_of_commitment = $pdl->date_of_commitment;
         $pdlrecyclebin->offense = $pdl->offense;
         $pdlrecyclebin->case_number = $pdl->case_number;
        $pdlrecyclebin->deleted_date = now();
        $pdlrecyclebin->save();
        $pdl->delete();
        return redirect()->route('pdl.index');
    }


    public function download($id)
    {
        $pdl = Pdl::findOrFail($id);
        $templateProcessor = new TemplateProcessor('word-template-pdl/pdl.docx');
        $templateProcessor->setValue('id', $pdl->id);
        $templateProcessor->setValue('name', $pdl->name);
        $templateProcessor->setValue('birth_date', $pdl->birth_date);
        $templateProcessor->setValue('address', $pdl->address);
        $templateProcessor->setValue('religion', $pdl->religion);
        $templateProcessor->setValue('civil_status', $pdl->civil_status);
        $templateProcessor->setValue('built', $pdl->built);
        $templateProcessor->setValue('complexion', $pdl->complexion);
        $templateProcessor->setValue('eye_color', $pdl->eye_color);
        $templateProcessor->setValue('sex', $pdl->sex);
        $templateProcessor->setValue('blood_type', $pdl->blood_type);
        $templateProcessor->setValue('educational_attainment', $pdl->educational_attainment);
        $templateProcessor->setValue('date_of_commitment', $pdl->date_of_commitment);
        $templateProcessor->setValue('offense', $pdl->offense);
        $templateProcessor->setValue('case_number', $pdl->case_number);
        $fileName = $pdl->name;
        $templateProcessor->saveAs($fileName . '.docx');
        return response()->download($fileName . '.docx')->deleteFileAfterSend(true);
    }
}


