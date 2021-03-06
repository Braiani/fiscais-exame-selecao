<?php

namespace App\CustomButtons;

use TCG\Voyager\Actions\AbstractAction;

class AutorizarButton extends AbstractAction
{
    public function getTitle()
    {
        return 'Aprovar';
    }

    public function getIcon()
    {
        return 'voyager-check';
    }

    public function getPolicy()
    {
        return 'edit';
    }

    public function getAttributes()
    {
        return [
            'class' => 'btn btn-sm btn-success pull-right aceitar',
            'style' => 'margin-right: 5px;',
            'data-id' => $this->data->{$this->data->getKeyName()},
        ];
    }

    public function getDefaultRoute()
    {
        return 'javascript:;';
    }

    public function shouldActionDisplayOnDataType()
    {
        return $this->dataType->name == 'candidato_exame' and $this->data->aprovado === null;
    }
}
