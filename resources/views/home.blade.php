@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2>Sveiks, {{Auth::user()->name}}!</h2>
                    <p>Tev šobrīd ir {{Auth::user()->reward_points}} punkti.</p>

                    @if(Auth::user()->role != 0)
                    <a href="/public/todo/create" class ="btn btn-primary">Pievienot darbu</a>
                    @endif
                    
                    <h4>Neizpildīti darbi, kas pievienoti pēdējo 24h laikā</h4>
                    <table class="table table-striped table-hover">                     
                            <div class="table responsive">
                                <tbody>
                
                                @foreach($todoitem as $item)
                                        @if(($item->status == 0) && ($time < $item->created_at))
                                        <tr>
                                            <td><a href="{{route('todo.show', $item->id)}}">{{$item->title}}</a></td>
                                        </tr>
                                        @endif
                            
                                @endforeach
                               </tbody>
                            </div>
                        </table>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
