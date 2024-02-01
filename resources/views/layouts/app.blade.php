<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<a class="navbar-brand" href="{{ route('home') }}">Navbar</a>
			<button class="navbar-toggler" type="button"
				data-bs-toggle="collapse" data-bs-target="#navbarNav"
				aria-controls="navbarNav" aria-expanded="false"
				aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item"><a class="nav-link {{ $pagina == 'home' ? 'active' : '' }}" aria-current="page" href="{{ route('home') }}">Home</a></li> <!-- Evaluando la pagina desde donde se esta extendiendo. -->
					<li class="nav-item"><a class="nav-link {{ $pagina == 'pagina1' ? 'active' : '' }}" href="{{ url('/pagina1') }}">Pagina 1</a></li>
					<li class="nav-item"><a class="nav-link {{ $pagina == 'pagina2' ? 'active' : '' }}" href="{{ url('/pagina2') }}">Pagina 2</a></li>
					<li class="nav-item"><a class="nav-link {{ $pagina == 'pagina3' ? 'active' : '' }}" href="{{ url('/pagina3') }}">Pagina 3</a></li>
				</ul>
			</div>
		</div>
	</nav>
	@section('contenido')
		
	@show
</body>
</html>


