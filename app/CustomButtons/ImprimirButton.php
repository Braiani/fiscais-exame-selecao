<?php

namespace App\CustomButtons;

use TCG\Voyager\Actions\AbstractAction;

class ImprimirButton extends AbstractAction
{
    public function getTitle()
    {
        return 'Imprimir formulário';
    }

    public function getIcon()
    {
        return 'voyager-download';
    }

    public function getPolicy()
    {
        return 'edit';
    }

    public function getAttributes()
    {
        return [
            'target' => '_Blank',
            'class' => 'btn btn-sm btn-success pull-right',
            'style' => 'margin-right: 5px;'
        ];
    }

    public function getDefaultRoute()
    {
        return route('voyager.'.$this->dataType->slug.'.analise.imprimir', $this->data->{$this->data->getKeyName()});
    }

    public function shouldActionDisplayOnDataType()
    {
        return $this->dataType->name == 'candidato_exame' and ($this->data->aprovado and $this->data->compensacao === 0);
    }
}
