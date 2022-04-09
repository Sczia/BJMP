@extends('BJMP.mainlayout')
@section('page-level-css')
<link rel="stylesheet" href="{{asset('./css/opening.css')}}">   
@endsection
@section('contents')

<div class=" section ">
    <div class="container ">
        <div class="content-section ">
            <div class="title ">
                <h1>MABUHAY!</h1>
            </div>
            <div class="content ">
                <h3>Welcome to Los Baños Municipal Jail</h3>
                <p>"Changing lives, Building a safer nation "</p>
                <hr/>
                <p>When one door of happiness closes, another opens, but often we look so long at the closed door that we do not see the one that has been opened for us. – Helen Keller</p>
                <div class="button ">
                    <a href="{{ route('landing') }}" id="Gotowebsite ">Go to website</a>
                </div>
            </div>
        </div>
        <div class="image-section ">
            <img src="./img/opening.jpg">
        </div>
    </div>
</div>
    
@endsection