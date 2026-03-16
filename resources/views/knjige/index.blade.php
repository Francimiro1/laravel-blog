<!DOCTYPE html>
<html>
<head>
    <title>Knjige</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <h1 class="mb-4">Popis knjiga</h1>

    <div class="row">
        @foreach($knjige as $knjiga)
            <div class="col-md-4 mb-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">{{ $knjiga['naslov'] }}</h5>
                        <p class="card-text">
                            <strong>Autor:</strong> {{ $knjiga['autor'] }}<br>
                            <strong>Godina:</strong> {{ $knjiga['godina'] }}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

</body>
</html>