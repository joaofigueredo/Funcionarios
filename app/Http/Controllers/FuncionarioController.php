<?php

namespace App\Http\Controllers;

use App\Http\Requests\FuncionarioRequest;
use App\Models\Cargo;
use App\Models\Funcionario;
use Barryvdh\DomPDF\Facade\PDF;
use DateTime;
use DateTimeZone;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use IntlDateFormatter;

class FuncionarioController extends Controller
{

    public function index()
    {
        $funcionarios = DB::table('funcionarios')
            ->join('cargos', 'cargos.id', '=', 'funcionarios.cargo_id')
            ->select('funcionarios.id', 'funcionarios.nome', 'salario', 'cargos.nome as cargo')
            ->orderBy('funcionarios.nome')
            ->get();

        return view('funcionario.index')->with('funcionarios', $funcionarios);
    }

    public function criar()
    {
        $cargos = DB::table('cargos')
            ->select('id', 'nome')
            ->get();

        return view('funcionario.criar')->with('cargos', $cargos);
    }

    public function salvar(FuncionarioRequest $request)
    {

        Funcionario::create([
            'nome' => $request->nome,
            'salario' => $request->salario,
            'cargo_id' => $request->cargo
        ]);
        return to_route('funcionario.index')
            ->with('success', "'{$request->nome}' criado com sucesso!");
    }

    public function editar(Funcionario $funcionario)
    {
        $cargos = DB::table('cargos')
            ->select('cargos.id', 'cargos.nome')
            ->get();

        return view('funcionario.editar')
            ->with('funcionario', $funcionario)
            ->with('cargos', $cargos);
    }

    public function atualizar(Request $request)
    {
        Funcionario::where('id', $request->id)
            ->update(
                [
                    'nome' => $request->nome,
                    'salario' => $request->salario,
                    'cargo_id' => $request->cargo
                ]
            );

        return to_route('funcionario.index');
    }

    public function deletar(Funcionario $funcionario)
    {
        $apagado = Funcionario::where('id', $funcionario->id)
            ->delete();
        return to_route('funcionario.index');
    }

    public function show(Funcionario $funcionario)
    {
        $cargo = Cargo::where('id', $funcionario->cargo_id)->get();

        $dateTimeObj = new DateTime('now', new DateTimeZone('America/Sao_Paulo'));
        $data = IntlDateFormatter::formatObject(
            $dateTimeObj,
            'MMMM',
            'pt/br'
        );

        return view('funcionario.show')
            ->with('funcionario', $funcionario)
            ->with('cargo', $cargo[0])
            ->with('data', $data);
    }
}
