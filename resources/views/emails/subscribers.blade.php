@component('mail::message')
# Welcome, 

Dear {{$email}},

Please click on the button to confirm your email.

@component('mail::button', ['url' => 'enter your desired url'])
We hope you to have best journey
@endcomponent

Thank you,<br>
{{ config('app.name') }}
@endcomponent