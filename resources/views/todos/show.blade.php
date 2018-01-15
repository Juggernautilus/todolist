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
        <td>Pievienošanas datums</td>
        <td>&nbsp;</td>
        </tr>
        <tr>
        <td>Termiņš</td>
        <td>&nbsp;</td>
        </tr>
        <tr>
        <td>Izpildes datums</td>
        <td>&nbsp;</td>
        </tr>
        <tr>
        <td>Prioritāte</td>
        <td>&nbsp;</td>
        </tr>
        <tr>
        <td>Darba izveidotājs</td>
        <td>&nbsp;</td>
        </tr>
        <tr>
        <td>Darba izpildītājs</td>
        <td>&nbsp;</td>
        </tr>
        <tr>
        <td>Iegūtie punkti</td>
        <td>&nbsp;</td>
        </tr>
    </tbody>
</table>
@endsection