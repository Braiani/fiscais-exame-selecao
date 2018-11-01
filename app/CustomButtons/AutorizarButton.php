<?php

namespace App\CustomButtons;

use TCG\Voyager\Actions\AbstractAction;

class AutorizarButton extends AbstractAction
{
    public function getTitle()
    {
        return $this->data->aprovado ? 'Recusar' : 'Aprovar';
    }

    public function getIcon()
    {
        return $this->data->aprovado ? 'voyager-x' : 'voyager-check';
    }

    public function getPolicy()
    {
        return 'read';
    }

    public function getAttributes()
    {
        $color = $this->data->aprovado ? 'danger' : 'success';
        return [
            'class' => 'btn btn-sm btn-'.$color.' pull-right',
            'style' => 'margin-right: 5px;'
        ];
    }

    public function getDefaultRoute()
    {
        return route('voyager.'.$this->dataType->slug.'.autorizacao', $this->data->{$this->data->getKeyName()});
    }

    public function shouldActionDisplayOnDataType()
    {
        return $this->dataType->name == 'candidato_exame';
    }
}
