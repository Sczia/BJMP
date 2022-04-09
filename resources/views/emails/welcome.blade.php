<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Email</title>
</head>
<body>
<h1>{{ $details['title'] }}</h1>
<p>{{ $details['body'] }}</p>

</body>
</html>






{{--  @component('mail::message')
# Welcome to Municipal Jail of Los Baños!


Congratulations your appointment has been approved.  Thank you!


@component('mail::button', ['url' => ''])
Visit Site
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent  --}}
