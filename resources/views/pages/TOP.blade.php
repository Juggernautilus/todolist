@extends('layouts.app')

@section('content')
    <h1>{{$title}}</h1>
    <p>Saraksts ar visproduktīvākajiem lietotājiem, kas ieguvuši visvairāk punktus.</p>

    <table class="table table-striped table-hover">                     
            <div class="table responsive">
                <thead>
                    <tr>
                      <th>#</th>
                      <th>Vārds</th>
                      <th>Punkti</th>
                      <th>Paveiktie darbi</th>
                    </tr>
                </thead>
                <tbody>

        
            @foreach($userinfo as $user)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->reward_points}}</td>
                        <td>{{$user->jobs_done}}</td>
                    </tr>
        
             @endforeach
               </tbody>
            </div>
        </table>


@endsection
