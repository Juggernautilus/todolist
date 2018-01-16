@extends('layouts.app');

@section('content')
    <h1>Pievienot jaunu darbu</h1>
    {!! Form::open(['action' => 'TodoController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title', 'Veicamais darbs *')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Iznest atkritumus'])}}
        </div>

        <div class="form-group">
            {{Form::label('priority', 'Darba prioritāte (1-5) *')}}
            {{Form::select('priority', ['1', '2', '3', '4', '5'], null, ['placeholder' => ' '])}}
        </div>

        <div class="form-group">
                {{Form::label('reward', 'Karmas punkti (10-100) *')}}
                {{Form::number('reward', null, ['min'=>10,'max'=>100])}}
            </div>

        <div class="form-group">
                {{Form::label('deadline', 'Izpildes termiņš')}}
                {{Form::date('deadline', null)}}
        </div>

        <p>* - obligātie lauki</p>

        {{Form::submit('Pievienot', ['class'=> 'btn btn-primary'])}}
    
{!! Form::close() !!}
@endsection