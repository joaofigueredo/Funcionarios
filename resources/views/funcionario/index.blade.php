<x-layout titulo="Index">
    <div class="main-index">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Salario</th>
                    <th scope="col">Cargo</th>
                    <th scope="col">#</th>
                    <th scope="col">#</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach($funcionarios as $funcionario)
                    <th scope="row">{{ $funcionario->id }}</th>
                    <td>{{ $funcionario->nome }}</td>
                    <td>R$ {{ number_format($funcionario->salario, 2, ',', '.') }}</td>
                    <td>{{ $funcionario->cargo }}</td>
                    <td><a class="botaoEditar" href="{{ route('funcionario.editar', $funcionario->id) }}">E</a></td>
                    <form action="{{ route('funcionario.deletar', $funcionario->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <td><button class="botaoExcluir">X</button></td>
                    </form>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
    <div>
        <a href="{{ route('funcionario.pdf') }}" class="gerarPdf">Gerar PDF</a>
    </div>

</x-layout>