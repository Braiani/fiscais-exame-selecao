<?php

namespace App\CustomButtons;

use TCG\Voyager\Actions\AbstractAction;

class DesfazerButton extends AbstractAction
{
    public function getTitle()
    {
        return 'Desfazer';
    }

    public function getIcon()
    {
        return 'voyager-refresh';
    }

    public function getPolicy()
    {
        return 'edit';
    }

    public function getAttributes()
    {
        return [
            'class' => 'btn btn-sm btn-info pull-right',
            'style' => 'margin-right: 5px;'
        ];
    }

    public function getDefaultRoute()
    {
        return route('voyager.'.$this->dataType->slug.'.analise.desfazer', $this->data->{$this->data->getKeyName()});
    }

    public function shouldActionDisplayOnDataType()
    {
        return $this->dataType->name == 'candidato_exame' and $this->data->aprovado !== null;
    }
}
