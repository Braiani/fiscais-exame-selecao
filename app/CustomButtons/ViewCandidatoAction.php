<?php

namespace App\CustomButtons;

use TCG\Voyager\Actions\AbstractAction;
use App\Candidato;

class ViewCandidatoAction extends AbstractAction
{
    public function getTitle()
    {
        return __('voyager::generic.view');
    }

    public function getIcon()
    {
        return 'voyager-eye';
    }

    public function getPolicy()
    {
        return 'edit';
    }

    public function getAttributes()
    {
        return [
            'class' => 'btn btn-sm btn-warning pull-right view',
        ];
    }

    public function getDefaultRoute()
    {
        $candidato = Candidato::select('id')->find($this->data->candidato_id);
        return route('voyager.candidatos.show', $candidato->id);
    }

    public function shouldActionDisplayOnDataType()
    {
        return $this->dataType->name == 'candidato_exame';
    }
}
