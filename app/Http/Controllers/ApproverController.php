<?php

namespace App\Http\Controllers;

use App\CandidatoExame;
use App\Jobs\SendApprovalMailJob;
use Illuminate\Http\Request;

class ApproverController extends Controller
{
    public function aprovarInscricao(Request $request, $id)
    {
        $inscricao = CandidatoExame::find($id);
        $inscricao->aprovado = true;
        $inscricao->funcao = $request->has('funcao') ? $request->funcao : '';
        $inscricao->save();

        dispatch(new SendApprovalMailJob($inscricao));

        return redirect()
            ->route("voyager.inscricoes.index")
            ->with([
                'message' => "Candidato aprovado com sucesso!",
                'alert-type' => 'success',
            ]);
    }

    public function rejeitarInscricao(Request $request, $id)
    {
        $inscricao = CandidatoExame::find($id);
        $inscricao->aprovado = false;
        $inscricao->funcao = '';
        $inscricao->save();

        return redirect()
            ->route("voyager.inscricoes.index")
            ->with([
                'message' => "Candidato recusado com sucesso!",
                'alert-type' => 'success',
            ]);
    }

    public function desfazerAnaliseInscricao(Request $request, $id)
    {
        $inscricao = CandidatoExame::find($id);
        $inscricao->aprovado = null;
        $inscricao->funcao = '';
        $inscricao->save();

        return redirect()
            ->route("voyager.inscricoes.index")
            ->with([
                'message' => "Análise desfeita com sucesso!",
                'alert-type' => 'success',
            ]);
    }

    public function imprimirFormularioInscricao(Request $request, $id)
    {
        $inscricao = CandidatoExame::find($id);
        return view('formulario.gecc')->with([
            'inscricao' => $inscricao
        ]);
    }
}
