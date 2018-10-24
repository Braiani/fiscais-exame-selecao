<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banco;
use App\Exame;
use App\Candidato;

class HomeController extends Controller
{
    public function index()
    {
        $bancos = Banco::orderBy('cod_banco', 'asc')->get();
        $exames = Exame::latest()->get();
        return view('welcome')->with([
            'bancos' => $bancos,
            'exames' => $exames
            ]);
    }

    public function store(Request $request)
    {
        return $request;
    }

    public function buscar(Request $request)
    {
        if (Candidato::where('cpf', $request->cpf)->count() > 0) {
            return Candidato::where('cpf', $request->cpf)->first();
        }else{
            return ['error' => 1];
        }
    }
}
