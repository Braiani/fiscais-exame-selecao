<?php

namespace App\Console\Commands;

use App\Candidato;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class RenameCandidatosFiles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'braiani:rename {edition : Ano da edição}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command used to rename the files uploaded from the Candidatos';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        if (!app()->isLocal()) {
            $this->error("Você não deve rodar esse comando em produção!");
            return;
        }

        $edition = $this->argument('edition');
        $candidates = Candidato::whereHas('exames', function ($query) use ($edition) {
            return $query->where('ano', $edition);
        })->get();

        if ($candidates->isEmpty()) {
            $this->info('Nenhum candidato encontrado!');
            return;
        }
        $progress = $this->output->createProgressBar(count($candidates));

        $progress->start();
        $errors = [];
        foreach ($candidates as $candidate) {
            $progress->advance();
            if (! $this->checkExistsFile($candidate)) {
                
                continue;
            }
        }

        $progress->finish();
        $this->info("\n");
    }

    private function checkExistsFile(Candidato $candidate)
    {
        $file = json_decode($candidate->arquivo, true);
        return Storage::disk('public')->exists($file[0]['download_link']);
    }
}
