<?php

namespace App\Widgets;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Widgets\BaseDimmer;
use App\CandidatoExame;
use App\Exame;

class InscritosDimmer extends BaseDimmer
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $ultimoExame = Exame::select('id')->formularioAtivo()->first();
        $count = $ultimoExame !== null ? CandidatoExame::where('exame_id', $ultimoExame->id)->count() : 0;
        $string = trans_choice('dimmer.inscrito', $count);

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-pen',
            'title'  => "{$count} {$string}",
            'text'   => __('dimmer.inscrito_text', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => __('dimmer.inscrito_link_text'),
                'link' => route('voyager.inscricoes.index'),
            ],
            'image' => asset('img/inscricoes.jpg'),
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return Auth::user()->can('browse', new CandidatoExame());
    }
}
