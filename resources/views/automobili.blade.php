@extends('layouts.app')

@section('title', 'Automobili')

@section('content')

<h1>Popis automobila</h1>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Marka</th>
            <th>Model</th>
            <th>Godina</th>
        </tr>
    </thead>

    <tbody>
        @foreach($automobili as $auto)

        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $auto['marka'] }}</td>
            <td>{{ $auto['model'] }}</td>
            <td>{{ $auto['godina'] }}</td>
        </tr>

        @endforeach
    </tbody>
</table>

@endsection