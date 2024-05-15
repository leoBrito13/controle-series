<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeriesFormRequest;
use App\Models\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    //

    public function index(Request $request)
    {
        $series = Serie::query()->orderBy("nome")->get();
        $mensagem = $request->session()->get("mensagem");
        return view('series.index', [
            'series' => $series,
            'mensagem' => $mensagem
        ]);
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(SeriesFormRequest $request)
    {

        // Validação dos dados do formulário
        // Criar a nova série
        $serie = Serie::create($request->all());
        $request->session()->flash('mensagem', "Série {$serie->nome} criada com sucesso.");
        return redirect()->route("series.index");
    }

    public function destroy(
        Request $request
    ) {

        $request->id;

        Serie::destroy($request->id);
        $request->session()->flash('mensagem', "Série excluída com sucesso.");
        return redirect()->route("series.index");
    }
}
