<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $titulo }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link nav-botao" href="{{ route('funcionario.index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-botao" href="{{ route('funcionario.criar') }}">Criar</a>
                </li>
            </ul>
        </div>
    </nav>

    @if(session('success'))
    <div class="alert alert-success" id="error-message">
        {{ session('success') }}
    </div>
    <script>
        setTimeout(function() {
            document.getElementById('error-message').style.display = 'none';
        }, 5000);
    </script>
    @endif


    @if (count($errors) > 0)
    <div id="error-message" class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    <script>
        setTimeout(function() {
            document.getElementById('error-message').style.display = 'none';
        }, 5000);
    </script>
    @endif

    {{ $slot }}
</body>

</html>