
 @component('mail::message')
<h2 class="text-success">MESSAGE</h2>
<p> Municipal Jail of Los Banos</p>

{{ $details['body'] }}

Thanks you and stay safe!<br>
{{ config('app.name') }}
@endcomponent
