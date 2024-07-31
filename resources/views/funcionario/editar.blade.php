<x-layout titulo="Editar">
    <div class="main">
        <form class="form-group" method="POST" action="{{ route('funcionario.atualizar') }}">
            @csrf
            @method('PUT')


            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Id</span>
                </div>
                <input type="text" class="form-control" aria-describedby="inputGroup-sizing-sm" id="id" name="id" value="{{ $funcionario->id}}" readonly>
            </div>

            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Nome</span>
                </div>
                <input type="text" class="form-control" aria-describedby="inputGroup-sizing-sm" id="nome" name="nome" value="{{ $funcionario->nome}}">
            </div>
            <div class=" input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">R$</span>
                </div>
                <input type="text" class="form-control" aria-label="Quantia" id="salario" name="salario" value="{{ $funcionario->salario}}">
                <div class=" input-group-append">
                    <span class="input-group-text">.00</span>
                </div>
            </div>



            <div class=" opcoes">
                @foreach($cargos as $cargo)
                <input type="radio" id="html" name="cargo" value="{{ $cargo->id }}" @if($cargo->id == $funcionario->cargo_id) checked @endif>
                <label for="{{$cargo->nome}}">{{ $cargo->nome }}</label><br>
                @endforeach
            </div>
            <button type="submit" class="btn btn-success">Salvar</button>
        </form>
    </div>

</x-layout>