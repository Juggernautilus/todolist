@extends('layouts.app');

@section('content')

    <a href="/public/todo" class ="btn btn-primary">Darāmie darbi</a>

    
    <h1>Things that have been done</h1>

    <table class="table table-striped">                     
            <div class="table responsive">
                <thead>
                    <tr>
                      <th>#</th>
                      <th>Darāmais</th>
                      <th>Prioritāte</th>
                      <th>Izpildes termiņš</th>
                      <th>Status</th>
                      <th>OK</th>
                    </tr>
                </thead>
                <tbody>

        
        @if(count($todoitem) > 0)
            @foreach($todoitem as $item)
                    @if($item->status == 1)
                    <tr>
                        <td><a href="{{route('todo.show', $item->id)}}">#</a></td>
                        <td> {{$item->title}}</td>
                        <td>{{$item->priority}}</td>
                        <td>{{$item->deadline}}</td>
                        <td>{{$item->status}}</td>
                        <td>
                                <a href="{{ route('todo/toggle', $item->id)}}">#</a>

                        </td>
                    </tr>
                    @endif
        
             @endforeach
        @else
            <p>Neviens darbs nav izdarīts</p>
        @endif
               </tbody>
            </div>
        </table>
@endsection