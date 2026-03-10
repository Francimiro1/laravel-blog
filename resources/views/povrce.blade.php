<!DOCTYPE html>
<html lang="hr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Povrće</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container-fluid">
		<a class="navbar-brand" href="/">Početna</a>
	</div>
</nav>
<div class="container mt-5">
	<h1 class="mb-4">Povrće</h1>
	<ul class="list-group">
		@foreach($povrce as $item)
			<li class="list-group-item">{{ $item }}</li>
		@endforeach
	</ul>
</div>
</body>
</html> 