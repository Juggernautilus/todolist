@extends('layouts.app')

@section('content')
<h1>{{$title}}</h1>

    @if(Auth::guest())
    <p>Ielogojies vai reģistrējies, lai uzsāktu darbu.</p>
    @else
    <p>Kādu darbu šodien pildīsi?</p>
    @endif

@endsection

