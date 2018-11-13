@component('mail::message')

<h3>Nouveau message de</h3><h4>{{$contact->nom}}</h4>
<br>
<p>Adresse email: </p><span>{{$contact->email}}</span>
<br>
<h5>Sujet:</h5><p>{{$contact->sujet}}</p>

<p>Message: </p><p>{{$contact->msg}}</p>

@component('mail::button', ['url' => ''])
Button Text
@endcomponent


{{ config('app.name') }}
@endcomponent
