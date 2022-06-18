<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Medical;
use App\Models\MedicalRecyclebin;
use Illuminate\Http\Request;
use PhpOffice\PhpWord\TemplateProcessor;

class MedicalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = Medical::all();
        $count = Contact::count();
        $messages = Contact::paginate(5);
        return view('BJMP.admin.records.medical.index', compact('records', 'count', 'messages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $records = Medical::all();
        return view('BJMP.admin.records.medical.pdf', compact('records'));
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
            $medical = new Medical();
            $medical->name = $request->input('name');
            $medical->birth_date = $request->input('birth_date');
            $medical->age = $request->input('age');
            $medical->address = $request->input('address');
            $medical->emergency_contact = $request->input('emergency_contact');
            $medical->relationship = $request->input('relationship');
            $medical->allergies = $request->input('allergies');
            $medical->current_medication = $request->input('current_medication');
            $medical->current_health_status = $request->input('current_health_status');
            $medical->medical_history = $request->input('medical_history');
            $medical->save();


            toast()->success('Success', 'You added a new record')->autoClose(3000)->animation('animate__fadeInRight', 'animate__fadeOutRight')->width('400px');
            return redirect()->back();
        } catch (\Throwable $th) {
            toast()->warning('Info', 'You did not input any record '. $th->getMessage())->autoClose(3000)->animation('animate__fadeInRight', 'animate__fadeOutRight')->width('400px');
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
    public function update(Request $request, $id)
    {
        $medical = Medical::findOrFail($id);




        $medical->update(
            $request->all()
        );

        if ($medical->wasChanged()) {
            toast()->success('Success', 'You saved changes')->autoClose(3000)->animation('animate__fadeInRight', 'animate__fadeOutRight')->width('400px');

            return redirect()->back();
        }
        toast()->info('Info', 'There is no changes')->autoClose(3000)->animation('animate__fadeInRight', 'animate__fadeOutRight')->width('400px');

        return redirect()->route('medical.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $medical = Medical::find($id);
        $medicalrecyclebin = new MedicalRecyclebin();
        $medicalrecyclebin->name = $medical->name;
        $medicalrecyclebin->birth_date = $medical->birth_date;
        $medicalrecyclebin->age = $medical->age;
        $medicalrecyclebin->address = $medical->address;
        $medicalrecyclebin->emergency_contact = $medical->emergency_contact;
        $medicalrecyclebin->relationship = $medical->relationship;
        $medicalrecyclebin->allergies = $medical->allergies;
        $medicalrecyclebin->current_medication = $medical->current_medication;
        $medicalrecyclebin->current_health_status = $medical->current_health_status;
        $medicalrecyclebin->medical_history = $medical->medical_history;
        $medicalrecyclebin->deleted_date = now();
        try {
            $medicalrecyclebin->save();
            $medical->delete();
            toast()->success('Success', 'You already deleted the record')->autoClose(3000)->animation('animate__fadeInRight', 'animate__fadeOutRight')->width('400px');
            return redirect()->route('medical.index');
        } catch (\Throwable $th) {
            toast()->warning('Warning', 'You did not deleted the record ')->autoClose(3000)->animation('animate__fadeInRight', 'animate__fadeOutRight')->width('400px');
            return redirect()->route('medical.index');
        }

        return redirect()->route('medical.index');
    }


    public function download($id)
    {
        $medical = Medical::findOrFail($id);
        $templateProcessor = new TemplateProcessor('word-template-med/medical.docx');
        $templateProcessor->setValue('id', $medical->id);
        $templateProcessor->setValue('name', $medical->name);
        $templateProcessor->setValue('birth_date', $medical->birth_date);
        $templateProcessor->setValue('age', $medical->age);
        $templateProcessor->setValue('address', $medical->address);
        $templateProcessor->setValue('emergency_contact', $medical->emergency_contact);
        $templateProcessor->setValue('relationship', $medical->relationship);
        $templateProcessor->setValue('allergies', $medical->allergies);
        $templateProcessor->setValue('current_medication', $medical->current_medication);
        $templateProcessor->setValue('current_health_status', $medical->current_health_status);
        $templateProcessor->setValue('medical_history', $medical->medical_history);
        $fileName = $medical->name;
        $templateProcessor->saveAs($fileName . '.docx');
        return response()->download($fileName . '.docx')->deleteFileAfterSend(true);
    }
}
