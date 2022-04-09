@extends('BJMP.mainlayout')
@section('page-level-css')
<link rel="stylesheet" href="{{asset('./css/contactus.css')}}">
@endsection
@section('contents')
<div class="custom-container">
    <div class="container">
        <div class="content">
            <div class="left-side">
                <div class="address details">

                   <i class="fas fa-map-marker-alt"></i>
                    <div class="topic">Address</div>
                    <div class="text-one">Municipal Jail of Los Baños</div>
                    <div class="text-two">PCAARRD Rd, Brgy Timugan, Los Baños, Laguna</div>
                </div>
                <div class="phone details">
                    <i class="fas fa-phone-alt"></i>
                    <div class="topic">Phone</div>
                    <div class="text-one">-----------</div>
                    <!-- <div class="text-two">+0096 3434 5678</div> -->
                </div>
                <div class="email details">
                    <i class="fas fa-envelope"></i>
                    <div class="topic">Email</div>
                    <div class="text-one">rivalosbanosmjnew2020@gmail.com </div>
                    {{-- <div class="text-two">MunicipalJailofLB@gmail.com</div> --}}
                </div>
            </div>
            <div class="right-side">
                <div class="topic-text">Send us a message</div>
                <p>How can we help?</p>
                <form action="{{ route('contact.store') }}" method="POST">
                    @csrf

                    <div class="input-box">
                        <input type="text" placeholder="name" name="name">
                    </div>
                    <div class="input-box">
                        <input type="text" placeholder="email" name="email">
                    </div>
                    <div class="input-box message-box">
                        <input type="text" placeholder="message" name="message">
                    </div>
                   {{--  <div class="button">
                        <input type="button" value="Send Now" type="send now">
                       <button class="btn btn-bca btn-lg text-light btn btn-sm btn-primary" type="submit">Send now</button>
                    </div> --}}

                    <div class="buttons">
                        <button id="submit" type="submmit">
                            SUBMIT
                        </button>
                    </div>



                </form>
            </div>

            <div class="contact-form">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d989813.9854593846!2d120.4820939228346!3d14.284633514510933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd60d97e4d2f49%3A0x1c5a5f99ba0a689f!2sLos%20Ba%C3%B1os%20Municipal%20Jail!5e0!3m2!1sen!2sph!4v1639142813472!5m2!1sen!2sph"
                    width="450" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>


        </div>

    </div>

</div>

@endsection
