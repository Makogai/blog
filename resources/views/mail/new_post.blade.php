@component('mail::message')
Imate novu poruku sa ForYouth sajta,

@component('mail::panel')
    <p><b>Naslov:</b> <i>{{$message['subject']}}</i></p>
    <p><b>Ime i prezime:</b> <i>{{$message['first_name']}} {{ $message['last_name'] }}</i></p>
    <p><b>Sadržaj:</b> <i>{{$message['message']}}</i></p>
    <p><b>Email:</b> <i>{{$message['email']}}</i></p>
@endcomponent

@endcomponent
