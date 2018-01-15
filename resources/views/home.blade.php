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

                    @if(Auth::user()->role != 0)
                    <a href="/public/todo/create" class ="btn btn-primary">Pievienot darbu</a>
                    @endif
                    <h4>Nesen pievienotie darbi</h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
