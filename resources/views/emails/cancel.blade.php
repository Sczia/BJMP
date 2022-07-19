
 @component('mail::message')
<h2 class="text-danger">APPOINTMENT CANCELED</h2>
<p> Municipal Jail of Los Banos</p>

<p>Note: Please take a screenshot of this message</p>

Name:  {{ $details['name'] }} <br>
Age:  {{ $details['age'] }} <br>
Address:  {{ $details['address'] }} <br>
Date:  {{ $details['date'] }} <br>
Prisoner name: {{ $details['prisoner_name'] }} <br>
Relationship to the prisoner:  {{ $details['relationship'] }} <br>
Phone number:  {{ $details['number'] }} <br>

Thanks you and stay safe!<br>
{{ config('app.name') }}
@endcomponent
