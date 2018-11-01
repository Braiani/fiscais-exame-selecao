<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CandidatoExame;

class ApproverController extends Controller
{
    public function atualizarAprovacao(Request $request, $id)
    {
        $inscricao = CandidatoExame::find($id);
        $inscricao->aprovado = (!$inscricao->aprovado or $inscricao->aprovado == null);
        $inscricao->save();

        $mensagem = $inscricao->aprovado ? 'aprovado' : 'recusado';

        return redirect()
                ->route("voyager.inscricoes.index")
                ->with([
                        'message'    => "Candidato {$mensagem} com sucesso!",
                        'alert-type' => 'success',
                    ]);
    }
}
