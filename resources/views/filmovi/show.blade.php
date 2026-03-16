<!DOCTYPE html>
<html>
<head>
    <title>Detalji filma</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">

    <a href="{{ route('filmovi.index') }}" class="btn btn-secondary mb-3">
        ← Povratak na filmove
    </a>

    <div class="card">
        <div class="card-body">
            <h2>{{ $film['naslov'] }}</h2>

            <p><strong>Redatelj:</strong> {{ $film['redatelj'] }}</p>
            <p><strong>Godina:</strong> {{ $film['godina'] }}</p>
            <p><strong>Opis:</strong> {{ $film['opis'] }}</p>
        </div>
    </div>

</div>

</body>
</html>