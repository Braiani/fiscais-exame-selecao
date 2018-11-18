<?php

namespace App\CustomButtons;

use TCG\Voyager\Actions\AbstractAction;

class RejeitarButton extends AbstractAction
{
    public function getTitle()
    {
        return 'Recusar';
    }

    public function getIcon()
    {
        return 'voyager-x';
    }

    public function getPolicy()
    {
        return 'edit';
    }

    public function getAttributes()
    {
        return [
            'class' => 'btn btn-sm btn-danger pull-right',
            'style' => 'margin-right: 5px;'
        ];
    }

    public function getDefaultRoute()
    {
        return route('voyager.'.$this->dataType->slug.'.analise.rejeitar', $this->data->{$this->data->getKeyName()});
    }

    public function shouldActionDisplayOnDataType()
    {
        return $this->dataType->name == 'candidato_exame' and $this->data->aprovado === null;
    }
}
