<!DOCTYPE html>
<html>
<head>
    <title>Filmovi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <h1 class="mb-4">Popis filmova</h1>

    <div class="row">
        @foreach($filmovi as $id => $film)
        <div class="col-md-4 mb-3">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title">{{ $film['naslov'] }}</h5>
                    <p class="card-text">
                        Redatelj: {{ $film['redatelj'] }} <br>
                        Godina: {{ $film['godina'] }}
                    </p>

                    <a href="{{ route('filmovi.show', $id) }}" class="btn btn-primary">
                        Detalji
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>

</body>
</html>