<?php

namespace App\Jobs;

use App\CandidatoExame;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Mail;

class SendApprovalMailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $inscricao;

    /**
     * Create a new job instance.
     *
     * @param CandidatoExame $inscricao
     */
    public function __construct(CandidatoExame $inscricao)
    {
        $this->inscricao = $inscricao;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $inscricao = $this->inscricao;

        $destinatario = $inscricao->candidato->email;
        $assunto = 'Aprovação para trabalhar no Exame de Seleção ' . $inscricao->exame->ano . ' - ' . $inscricao->candidato->nome;
        Mail::send('emails.aprovado', ['inscricao' => $inscricao], function ($message) use ($destinatario, $assunto) {
            $message->from('processoseletivo.cg@ifms.edu.br', 'Exame de Seleção CG');
            $message->to($destinatario);
            $message->subject($assunto);
        });
    }
}
