<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CandidatoExame;
use Illuminate\Support\Facades\Mail;

class ApproverController extends Controller
{
    public function aprovarInscricao(Request $request, $id)
    {
        $inscricao = CandidatoExame::find($id);
        $inscricao->aprovado = true;
        $inscricao->funcao = $request->has('funcao') ? $request->funcao : '';
        $inscricao->save();
        
        $destinatario = $inscricao->candidato->email;
        $assunto = 'Aprovação para trabalhar no Exame de Seleção ' . $inscricao->exame->ano;
        Mail::send('emails.aprovado', ['inscricao' => $inscricao], function ($message) use ($destinatario, $assunto) {
            $message->from('processoseletivo.cg@ifms.edu.br', 'Exame de Seleção CG');
            $message->to($destinatario);
            $message->subject($assunto);
        });

        return redirect()
                ->route("voyager.inscricoes.index")
                ->with([
                        'message'    => "Candidato aprovado com sucesso!",
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
                        'message'    => "Candidato recusado com sucesso!",
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
                        'message'    => "Análise desfeita com sucesso!",
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
