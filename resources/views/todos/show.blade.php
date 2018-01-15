@extends('layouts.app');

@section('content')


<table class="table">
    <thead class="thead-dark">
        <tr>
        <th>Darāmais darbs</td>
        <th>{{$todo->title}}</td>
        </tr>
    </tbody>
    <tbody>
        <tr>
        <td>Darba izveidotājs</td>
        <td>{{$todo->user_who_submitted}}</td>
        </tr>
        <tr>
        <td>Darba izpildītājs</td>
        <td>
            @if($todo->user_who_submitted == 0)
                Darbs vēl nav izpildīts!
            @else
            
            @endif
        </td>
        </tr>
        <tr>
        <td>Pievienošanas datums</td>
        <td>{{$todo->created_at}}</td>
        </tr>
        <tr>
        <td>Termiņš</td>
        <td>{{$todo->deadline}}</td>
        </tr>
        <tr>
        <td>Izpildes datums</td>
        <td>{{$todo->updated_at}}</td>
        </tr>
        <tr>
        <td>Prioritāte</td>
        <td>{{$todo->priority}}</td>
        </tr>
        <tr>
        <td>Punkti</td>
        <td>{{$todo->reward}}</td>
        </tr>
    </tbody>
</table>

<a href="{{ route('todo/toggle', $todo->id)}}"  class="btn btn-success">Izpildīt</a>
@endsection