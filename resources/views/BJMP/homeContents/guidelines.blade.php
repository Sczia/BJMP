@extends('BJMP.mainlayout')
@section('page-level-css')
<link rel="stylesheet" href="{{asset('css/guidelines.css')}}">
<link rel="stylesheet" href="{{asset('css/error.css')}}">

@endsection
@section('contents')
@if ($count>=30)

<div class="image">

    <img src="./img/timetime.png">

</div>
  <div class="wrapper">

      <h1>WARNING!</h1>
      <p class="message">
          Sorry! The appointment for this week is already fully booked, kindly wait for the next vacancy of appointment. Thank you for your understanding.

        </p>
        <a href="{{ route('landing') }}" class="btn">Back to home</a>
        <p class="copyRights">&copy; 2022 System. All rights reserved</p>


</div>
@else


<div class="section">
    <div class="container">
        <div class="content-section">
            <div class="title">
                <h1>GUIDLINES</h1>
                <div class="line"></div>
            </div>
            <div class="content">
                <h3>For No-Contact Visitation:</h3>
                <p>a) The persons allowed to visit PDL shall include immediate family members except minors, PDL’s counsel, medical doctor or priest or religious minister chosen by him or by any member of his immediate family or by his counsel, or by
                    any national non-governmental organization duly accredited by CHR or by any international non-governmental organization duly accredited by the office of the President.</p>
                <p>b) The schedule of visitation shall be from 1:00 PM to 4:00 PM during Tuesdays to Fridays, and 8:00 AM to 12:00 NN resuming at 1:00 PM to 4:00 PM on Saturdays and Sundays; </p>
                <p>c) A PDL shall be entitled to No-contact Visitation with only one (1) visitor for maximum of 1 hour per visitation. After every visit or turn of sets of visitors in a given period, the cubicle must be disinfected using sodium hypochlorite
                    solution or bleach solution; </p>
                <p>d) A visitor shall present/bring at the triage area the following requirements: </p>
                <p> 1. Government-issued Identification Card for verification of visitor’s address that can be helpful in determining if the visitors come from a low/medium-risk locality;</p>
                <p> 2. Vaccination Card (Full Dose)</p>
                <p> 3. Small alcohol spray or sanitizing gel; and </p>
                <p> 4. Health Declaration form from BJMP (Non-compliance to any of the above-stated requirements shall cause the denial of the opportunity of availing the visitation privileges).</p>
                <p>e) A visitor shall be required to wear face mask and face shield at all times.</p>



                <div class="button ">
            {{--         <a href="./appform.html " id="Gotowebsite ">NEXT TO APPOINTMENT FORM</a> --}}
                    <a href="{{ route('appointment') }}" id="Gotowebsite ">NEXT TO APPOINTMENT FORM</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endsection
