 @extends('BJMP.mainlayout')
@section('page-level-css')

<link rel="stylesheet" href="{{ asset('fullcalendar/main.css') }}">
<script src="{{ asset('fullcalendar/main.js') }}"></script>

<script>

document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');
  var calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: 'dayGridMonth',
    events: [
                    @foreach ($events as $event)
                        {
                        title : '{{ $event->title }}',
                        start : '{{ $event->start }}',
                        end : '{{ $event->end }}',
                        url : '',
                        color:'{{ ($event->color != null) ? '#'.$event->color : '#2e45e0'}}',
                        },
                    @endforeach
                ],
  });
  calendar.render();
});

</script>

<style>
    .section-title {
    font-size: 4rem;
    font-weight: 300;
    color: black;
    margin-bottom: 10px;
    text-transform: uppercase;
    letter-spacing: 0.2rem;
    text-align: center;
    }

    .section-title span {
    color: rgb(50, 216, 119);
    }
</style>

@endsection



@section('contents')


<section  id="services">
    <div class="services container">
        <div class="service-top " >
            <h1 class="section-title">CAL<span>EN</span>DAR</h1>
        </div>

<section>
<div id='calendar'></div>

</section>

@endsection

