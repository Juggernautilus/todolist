@extends('layouts.app');

@section('content')

    @if(Auth::user()->role != 0)
        <a href="/public/todo/create" class ="btn btn-primary">Pievienot darbu</a>
    @endif

    <a href="/public/todo/history" class ="btn btn-primary">Izdarītie darbi</a>

    
    <h1>Things that need to be done</h1>

    <table class="table table-striped table-hover">                     
            <div class="table responsive">
                <thead>
                    <tr>
                      <th>#</th>
                      <th>Darāmais</th>
                      <th>Prioritāte</th>
                      <th>Izpildes termiņš</th>
                      <th>Iegūstamie punkti</th>
                      <th></th>
                    </tr>
                </thead>
                <tbody>

        
        @if(count($todoitem) > 0)
            @foreach($todoitem as $item)
                    @if($item->status == 0)
                    <tr>
                        <td><a href="{{route('todo.show', $item->id)}}">#</a></td>
                        <td> {{$item->title}}</td>
                        <td>{{$item->priority}}</td>
                            @if(!$item->deadline)
                            <td>Nav konkrēta termiņa</td>
                            @elseif($curr_time < $item->deadline)
                            <td>Atlikusi {{$curr_time->diffInDays(\Carbon\Carbon::parse($item->deadline), true)}} dienas</td>
                            @else
                            <td>Nokavēts par {{$curr_time->diffInDays(\Carbon\Carbon::parse($item->deadline), true)}} dienām</td>
                            @endif
                            <td>{{$item->reward}}</td>
                        <td>
                                <a href="{{ route('todo/toggle', $item->id)}}"  class="btn btn-success">Izpildīt</a>


                        </td>
                    </tr>
                    @endif
        
             @endforeach
        @else
            <p>Šobrīd nav ieplānotu darbu</p>
        @endif
               </tbody>
            </div>
        </table>
@endsection