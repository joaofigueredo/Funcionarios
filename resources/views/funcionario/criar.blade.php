<x-layout titulo="Criar Funcionario">
    <div class="main">
        <form class="form-group" method="POST" action="{{ route('funcionario.salvar') }}">
            @csrf
            @method('POST')

            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Nome</span>
                </div>
                <input type="text" class="form-control" aria-describedby="inputGroup-sizing-sm" id="nome" name="nome" autofocus>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">R$</span>
                </div>
                <input type="text" class="form-control" aria-label="Quantia" id="salario" name="salario">
                <div class="input-group-append">
                    <span class="input-group-text">.00</span>
                </div>
            </div>

            <div class="opcoes">
                @foreach($cargos as $cargo)
                <input type="radio" id="html" name="cargo" value="{{ $cargo->id }}">
                <label for="{{$cargo->nome}}">{{ $cargo->nome }}</label><br>
                @endforeach
            </div>
            <button type="submit" class="btn btn-success">Criar</button>
        </form>
    </div>
</x-layout>