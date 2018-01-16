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
        <td>{{App\User::find($todo->user_who_added)->name}}</td>
        </tr>
        <tr>
        <td>Darba izpildītājs</td>
        <td>
            @if($todo->user_who_submitted == 0)
                Darbs vēl nav izpildīts
            @else
                {{App\User::find($todo->user_who_submitted)->name}}
            @endif
        </td>
        </tr>
        <tr>
        <td>Pievienošanas datums</td>
        <td>{{$todo->created_at}}</td>
        </tr>
        <tr>
        <td>Termiņš</td>
            @if(!$todo->deadline)
                <td>Nav noteikta termiņa</td>
            @else
                <td>{{$todo->deadline}}</td>
            @endif
        </tr>
        <tr>
        <td>Izpildes datums</td>
        <td>
            @if($todo->status)
            
            {{$todo->updated_at}}

            @else
            Darbs vēl nav izpildīts
        
            @endif
        </td>
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

@if($todo->status == 0)
<a href="{{ route('todo/toggle', $todo->id)}}"  class="btn btn-success">Izpildīt</a>
@endif
@endsection