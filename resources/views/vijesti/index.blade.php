@extends('layouts.app')

@section('title', 'Vijesti')

@section('content')
<div class="container mt-4">
    <h1>Vijesti</h1>

    @forelse($vijesti as $vijest)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{ $vijest['naslov'] }}</h5>
                <p class="card-text text-muted">Datum: {{ $vijest['datum'] }}</p>
                <a href="#" class="btn btn-sm btn-primary">Čitaj više</a>
            </div>
        </div>
    @empty
        <p>Nema vijesti.</p>
    @endforelse
</div>
@endsection