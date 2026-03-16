<!DOCTYPE html>
<html>
<head>
    <title>Recepti</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">

    <h1 class="mb-3">Recepti</h1>

    <div class="mb-3">
        <a href="{{ route('recepti.index') }}" class="btn btn-secondary">Svi</a>
        <a href="{{ route('recepti.index', ['kategorija' => 'desert']) }}" class="btn btn-primary">Deserti</a>
        <a href="{{ route('recepti.index', ['kategorija' => 'glavno']) }}" class="btn btn-primary">Glavna jela</a>
        <a href="{{ route('recepti.index', ['kategorija' => 'salata']) }}" class="btn btn-primary">Salate</a>
    </div>

    <ul class="list-group">
        @foreach($recepti as $recept)
            <li class="list-group-item">
                {{ $recept['naziv'] }} 
                <span class="badge bg-secondary">{{ $recept['kategorija'] }}</span>
            </li>
        @endforeach
    </ul>

</div>

</body>
</html>