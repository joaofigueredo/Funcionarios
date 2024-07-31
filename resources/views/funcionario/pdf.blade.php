<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF</title>
</head>

<body>
    <div class="main">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Salario</th>
                    <th scope="col">Cargo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach($funcionarios as $funcionario)
                    <td>{{ $funcionario->nome }}</td>
                    <td>R$ {{ number_format($funcionario->salario, 2, ',', '.') }}</td>
                    <td>{{ $funcionario->cargo }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div>
        <p class="mes-atual">{{ $data }}</p>
    </div>

</body>

</html>