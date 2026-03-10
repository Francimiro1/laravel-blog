@extends('layouts.app')

@section('title', 'Studenti')

@section('content')

<h1>Studenti</h1>

<div class="row">

@foreach($studenti as $student)

<div class="col-md-3">
    <div class="card mb-3 {{ $student['polozio'] ? 'border-success' : 'border-danger' }}">

        <div class="card-body text-center">
            <h5>{{ $student['ime'] }}</h5>
            <p>Godina: {{ $student['godina'] }}</p>

            @if($student['polozio'])
                <span class="badge bg-success">Položio</span>
            @else
                <span class="badge bg-danger">Nije položio</span>
            @endif
        </div>

    </div>
</div>

@endforeach

</div>

@endsection