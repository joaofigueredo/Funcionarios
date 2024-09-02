<x-layout titulo="{{ $funcionario->nome }}">
    <table class="table table-striped table-bordered">
        <thead>
            <th style="text-align: center;">Nome</th>
            <th style="text-align: center;">Salario</th>
            <th style="text-align: center;">Cargo</th>
        </thead>
        <tbody>
            <td style="text-align: center;">{{ $funcionario->nome }}</td>
            <td style="text-align: center;">R$ {{ number_format($funcionario->salario, 2, ',', '.') }}</td>
            <td style="text-align: center;">{{ $cargo->nome }}</td>
        </tbody>
    </table>
    <div>
        <p class="mes-atual">{{ $data }}</p>

    </div>
</x-layout>