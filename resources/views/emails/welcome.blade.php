
 @component('mail::message')
 {{ $details['title'] }}


 {{ $details['body'] }}
 


Thanks you!<br>
{{ config('app.name') }}
@endcomponent
