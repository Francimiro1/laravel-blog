@extends('layouts.app')

@section('title', 'Raspored')

@section('content')

<h1>Tjedni raspored</h1>

@foreach($raspored as $dan => $sati)

<div class="card mb-3 {{ $loop->odd ? 'bg-light' : '' }}">

    <div class="card-header">
        <strong>{{ $dan }}</strong>
    </div>

    <ul class="list-group list-group-flush">

        @foreach($sati as $sat)

            @include('partials.sat', ['sat' => $sat])

        @endforeach

    </ul>

</div>

@endforeach

@endsections