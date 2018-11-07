<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banco;
use App\Exame;
use App\Candidato;
use App\Http\Requests\FormRequestValidation;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index()
    {
        $bancos = Banco::orderBy('cod_banco', 'asc')->get();
        $exame = Exame::formularioAtivo()->latest()->first();
        return view('welcome')->with([
            'bancos' => $bancos,
            'exame' => $exame
            ]);
    }

    public function store(FormRequestValidation $request)
    {
        $candidato = $this->buscar($request);
        
        isset($candidato['error']) ? $candidato = $this->createCandidato($request) : $candidato = $this->updateCandidato($request, $candidato);

        if (!$candidato->servidor) {
            if ($request->hasFile('arquivo')) {
                $filesPath = $this->salvarArquivo($request);
                $candidato->arquivo = $filesPath[0]['arquivo'];
                $candidato->save();
            }
        }
        
        $exames_anteriores = $candidato->exames->count() > 0 ? $candidato->exames->toArray() : null;
        $ano = (integer) $request->ano;
        $local = (integer) $request->local_prova_id;
        $compensacao = (integer) $request->has('compensacao') ? $request->compensacao : 0;
        $sync_data = [];

        if ($exames_anteriores != null) {
            foreach ($exames_anteriores as $key => $exame) {
                $sync_data[$exame['id']] = [
                    'local_prova_id' => $exame['pivot']['local_prova_id'],
                    'compensacao' => $exame['pivot']['compensacao']
                ];
            }
        }
        $sync_data[$ano] = ['local_prova_id' => $local, 'compensacao' => $compensacao];

        $candidato->exames()->sync($sync_data);

        $request->session()->flash('sucesso', 'Cadastro realizado/atualizado com sucesso');
        $request->session()->flash('servidor', $candidato->servidor);
        return redirect()->route('home');
    }

    public function createCandidato(Request $request)
    {
        if (!$request->servidor and $request->filled('siape')) {
            $request->merge(['siape' => null]);
        }
        
        $candidato = Candidato::create($request->except(['_token', 'ano', 'local_prova_id', 'compensacao']));
        $filesPath = $this->salvarArquivo($request);
        $candidato->arquivo = $filesPath[0]['arquivo'];
        $candidato->save();
        return $candidato;
    }
    
    public function updateCandidato(Request $request, Candidato $candidato)
    {
        if (!$request->servidor and $request->filled('siape')) {
            $request->merge(['siape' => null]);
        }
        
        $candidato->update($request->except(['_token', 'ano', 'local_prova_id', 'compensacao']));
        if (!$candidato->servidor) {
            $filesPath = $this->salvarArquivo($request);
            $candidato->arquivo = $filesPath[0]['arquivo'];
            $candidato->save();
        }
        return $candidato;
    }

    public function salvarArquivo(Request $request)
    {
        $files = Arr::wrap($request->file('arquivo'));
        $filesPath = [];
        $path = $this->generatePath();

        foreach ($files as  $file) {
            $filename = $this->generateFilename($file, $path);
            $file->storeAs(
                $path,
                $filename.'.'.$file->getClientOriginalExtension(),
                config('voyager.storage.disk', 'public')
            );

            array_push($filesPath, [
                'arquivo' => $path.$filename.'.'.$file->getClientOriginalExtension(),
            ]);
        }
        return $filesPath;
    }

    /**
     * @return string
     */
    protected function generatePath()
    {
        return 'candidatos'.DIRECTORY_SEPARATOR.date('FY').DIRECTORY_SEPARATOR;
    }

    public function generateFilename($file, $path)
    {
        $filename = Str::random(20);

        // Make sure the filename does not exist, if it does, just regenerate
        while (Storage::disk(config('voyager.storage.disk'))->exists($path.$filename.'.'.$file->getClientOriginalExtension())) {
            $filename = Str::random(20);
        }

        return $filename;
    }

    public function buscar(Request $request, $controller = false)
    {
        if (Candidato::where('cpf', $request->cpf)->count() > 0) {
            return $controller ? Candidato::where('cpf', $request->cpf)->first() : Candidato::where('cpf', $request->cpf)->with('exames')->first();
        } else {
            return ['error' => 1];
        }
    }
}
