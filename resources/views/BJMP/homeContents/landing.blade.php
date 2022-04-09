@extends('BJMP.mainlayout')
@section('page-level-css')

    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('container/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/calendar.css') }}">
@endsection

@section('contents')





    <!--------------------------------------------------SLIDER--------------------------------------------------- -->

    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class=""
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"
                class=""></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"
                class="active" aria-current="true"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item">
                <img src="./img/1-covid.jpg" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                <rect width="100%" height="100%" fill="#777"></rect>
                </svg>

                <div class="container">
                    <div class="carousel-caption text-start">
                        <!--   <h1>Example headline.</h1>
                                <p>Some representative placeholder content for the first slide of the carousel.</p>
                                <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p> -->
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img src="./img/4-covid.jpg" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                <rect width="100%" height="100%" fill="#777"></rect>
                </svg>

                <div class="container">
                    <div class="carousel-caption text-start">
                        <!--    <h1>Example headline.</h1>
                                <p>Some representative placeholder content for the first slide of the carousel.</p>
                                <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p> -->
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img src="./img/2-covid.jpg" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                <rect width="100%" height="100%" fill="#777"></rect>
                </svg>

                <div class="container">
                    <div class="carousel-caption">
                        <!--  <h1>Another example headline.</h1>
                                <p>Some representative placeholder content for the second slide of the carousel.</p>
                                <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p> -->
                    </div>
                </div>
            </div>
            <div class="carousel-item active">
                <img src="./img/3-covid.jpg" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                <rect width="100%" height="100%" fill="#777"></rect>
                </svg>

                <div class="container">
                    <div class="carousel-caption text-end">
                        <!-- <h1>One more for good measure.</h1>
                                <p>Some representative placeholder content for the third slide of this carousel.</p>
                                <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p> -->
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!--------------------------------------------------END - SLIDER--------------------------------------------------- -->


    <!--------------------------------------------------Announcement--------------------------------------------------- -->
     <section id="attendance">
         <div class="services contain">
                <div class="service-top">
                <h1 class="section-title">ANNOU<span>NC</span>EMENT</h1>


            </div>
             <div class="service-below">
                 <div class="service-items">
                     <div class="icon"><img src="https://img.icons8.com/bubbles/50/000000/alpha.png" /></div>
                     <h2>ANNOUNCEMENT</h2>
                     @foreach ($announcement as $announcement)
                         <p> {{ $announcement->announce }}</p>
                     @endforeach


                 </div>
             </div>
         </div>
     </section>


    <!--------------------------------------------------Services--------------------------------------------------- -->
    <section id="services">
        <div class="services container">
            <div class="service-top">
                <h1 class="section-title">SCHE<span>D</span>ULE</h1>
                <!-- <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum deleniti maiores pariatur assumenda quas magni et, doloribus quod voluptate quasi molestiae magnam officiis dolorum, dolor provident atque molestias voluptatum explicabo!</p> -->
            </div>
    <!-- Service Section -->
    <section id="services">
        <div class="services container">
            <div class="service-bottom">
                <div class="service-item">
                    <div class="icon"><img src="https://img.icons8.com/bubbles/50/000000/so-so.png" /></div>
                    <h2>Paabot</h2>

                    <p>Days: {{ $paabot->day }}</p>
                    <p>Time: {{ $paabot->time }}</p>
                    <p>Dorm Schedule: {{ $paabot->dorm }} </p>

                </div>
                <div class="service-item">
                    <div class="icon"><img src="https://img.icons8.com/bubbles/50/000000/clock.png" /></div>
                    <h2>E-Dalaw</h2>

                    <p> Days: {{ $dalaw->day }}</p>
                    <p>Time: {{ $dalaw->time }}</p>
                    <p>Dorm Schedule: {{ $dalaw->dorm }}</p>


                </div>
                <div class="service-item">
                    <div class="icon">{{-- <img src="https://img.icons8.com/bubbles/100/000000/services.png" /> --}}<img
                            src="https://img.icons8.com/bubbles/50/000000/phone-office.png" /></div>
                    <h2>E-Tawag</h2>

                    <p>Days: {{ $tawag->day }}</p>
                    <p>Time: {{ $tawag->time }}</p>
                    <p>Dorm Schedule: {{ $tawag->dorm }}</p>

                </div>
            </div>
        </div>
    </section>
    <!-- End Service Section -->

    <!--------------------------------------------------CALENDAR---------------------------------------------------- -->
    <section  id="services">
        <div class="services container">
            <div class="service-top " >
                <h1 class="section-title">CAL<span>EN</span>DAR</h1>
                <!-- <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum deleniti maiores pariatur assumenda quas magni et, doloribus quod voluptate quasi molestiae magnam officiis dolorum, dolor provident atque molestias voluptatum explicabo!</p> -->
            </div>

            <div class="contain">
                <div class="calendar">
                    <div class="month">
                        <i class="fas fa-angle-left prev"></i>
                        <div class="date">
                            <h1></h1>
                            <p></p>
                        </div>
                        <i class="fas fa-angle-right next"></i>
                    </div>
                    <div class="weekdays">
                        <div>Sun</div>
                        <div>Mon</div>
                        <div>Tue</div>
                        <div>Wed</div>
                        <div>Thu</div>
                        <div>Fri</div>
                        <div>Sat</div>
                    </div>
                    <div class="days"></div>
                </div>
                <div class="events">
                    <div class="event-title">
                        <i class="fas fa-calendar-week"></i>
                        <h2>Event for this month</h2>
                    </div>

                    <div class="event">
                        <a href="">

                            <h3>1 - New Year's Day</h3>
                        </a>
                    </div>
                </div>
            </div>

            <script src="./js/calendar.js"></script>





            {{-- ----------------------------------------------------------------------------------- --}}

            <!-- About Section -->
            <section id="about">
                <div class="about container">
                    <div class="col-left">
                        <div class="about-img">
                            <img src="./img/P1.jpg" alt="img">
                        </div>
                    </div>
                    <div class="col-right">
                        <h1 class="section-title">About <span>us</span></h1>
                        <h2>History</h2>
                        <p>On January 2, 1991, the Bureau of Jail Management and Penology was created thru Republic Act 6975
                            as a line Bureau under the Department of Interior and Local Government. The Jail Bureau is the
                            upgraded version of its forerunner, the Office of Jail Management and Penology of the defunct
                            PC/INP last headed by BRIG GEN Arsenio E. Concepcion. As mandated by law, the BJMP shall operate
                            under the reorganized Department of the Interior and Local Government. Starting from scratch
                            with 500 personnel in 1991 the BJMP weaned from its mother PC/INP as a mere component, to become
                            a full-fledged bureau. Director Charles S. Mondejar took his oath of office on July 1 of 1991 as
                            the first Chief of the Bureau. The Bureau of Jail Management and Penology supervises and
                            controls all district, city and municipal jails..</p>
                        <a href="{{ route('aboutus') }} " class="cta"> Read more</a>
                    </div>
                </div>
            </section>
            <!-- -----------------------------------End About Section---------------------------------------- -->

            <!----------------------------------------- Contact Section ------------------------------------------>
            <section id="contact">
                <div class="contact container">
                    <div>
                        <h1 class="section-title">Contact <span>info</span></h1>
                    </div>
                    <div class="contact-items">
                        <div class="contact-item">
                            <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png" />
                            </div>
                            <div class="contact-info">
                                <h1>Phone</h1>
                                <h2>---------------</h2>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="icon"><img src="https://img.icons8.com/bubbles/50/000000/gmail-new.png" />
                            </div>
                            <div class="contact-info">
                                <h1>Email</h1>
                                <h2>rivalosbanosmjnew2020@gmail.com</h2>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="icon"><img
                                    src="https://img.icons8.com/bubbles/100/000000/map-marker.png" /></div>
                            <div class="contact-info">
                                <h1>Address</h1>
                                <h2>Municipal Jail of Los Baños PCAARRD Rd, Brgy Timugan, Los Baños, Laguna</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Contact Section -->



            <!-- Footer -->
            <section id="footer">
                <div class="footer container">
                    <div class="brand">
                        <h1><span>L</span>os Baños <span>M</span>unicipal Jail </h1>
                    </div>
                    <div class="info-container">
                        <div class="info-container-left">
                            <a href="./appform.html">
                                <i class="fa-solid fa-calendar-check"></i>
                                <span>Appointment Form    / </span>
                            </a>
                            <a href="https://www.facebook.com/losbanos.municipaljail">
                                <i class="fa-brands fa-facebook-square"></i>
                                <span>Facebook</span>
                            </a>
                        </div>

                        <p>Copyright © 2022 System. All rights reserved</p>
                    </div>
            </section>



            <!-- End Footer -->


        @section('page-level-js')
        <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"> </script>
            <script src="{{ asset('js/landing.js') }}"> </script>
            <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"> </script>
            <script src="{{ asset('vendor/jquery/jquery.js') }}"> </script>
            <script src="{{ asset('vendor/bootstrap/') }}"> </script>
        @endsection
    @endsection
