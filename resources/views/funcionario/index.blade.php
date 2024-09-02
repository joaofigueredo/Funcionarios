<x-layout titulo="Index">
    <div class="main-index">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Salario</th>
                    <th scope="col">Cargo</th>
                    <th scope="col">#</th>
                    <th scope="col">#</th>
                    <th scope="col">#</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach($funcionarios as $funcionario)
                    <td>{{ $funcionario->nome }}</td>
                    <td>R$ {{ number_format($funcionario->salario, 2, ',', '.') }}</td>
                    <td>{{ $funcionario->cargo }}</td>
                    <td><a class="botaoEditar" href="{{ route('funcionario.editar', $funcionario->id) }}">E</a></td>
                    <form action="{{ route('funcionario.deletar', $funcionario->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <td><button class="botaoExcluir">X</button></td>
                    </form>
                    <td><a class="botaoEditar" href="{{ route('funcionario.show', $funcionario->id) }}">contra-cheque</a></td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</x-layout>