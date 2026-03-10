@extends('layouts.app')

@section('title', 'Knjige')

@section('content')

<h1>Popis knjiga</h1>

<table class="table">
<thead>
<tr>
<th>#</th>
<th>Naslov</th>
<th>Autor</th>
<th>Godina</th>
<th>Status</th>
</tr>
</thead>

<tbody>

@forelse($knjige as $knjiga)

<tr class="{{ $knjiga['procitana'] ? 'table-success' : 'table-secondary' }}">
<td>{{ $loop->iteration }}</td>
<td>{{ $knjiga['naslov'] }}</td>
<td>{{ $knjiga['autor'] }}</td>
<td>{{ $knjiga['godina'] }}</td>
<td>
@if($knjiga['procitana'])
Pročitano
@else
Nije pročitano
@endif
</td>
</tr>

@empty

<tr>
<td colspan="5" class="text-center">Nema knjiga</td>
</tr>

@endforelse

</tbody>
</table>

<p>
<strong>Pročitano {{ $procitano }} od {{ $ukupno }} knjiga</strong>
</p>

@endsection