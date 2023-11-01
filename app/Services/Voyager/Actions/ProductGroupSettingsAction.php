<?php

namespace App\Services\Voyager\Actions;

use TCG\Voyager\Actions\ViewAction as VoyagerViewAction;

class ProductGroupSettingsAction extends VoyagerViewAction
{
    public function getTitle()
    {
        return 'Настройки';
    }

    public function getIcon()
    {
        return 'voyager-settings';
    }

    public function getPolicy()
    {
        return 'edit';
    }

    public function getAttributes()
    {
        return [
            'class' => 'btn btn-sm btn-warning pull-right view',
            // 'target' => '_blank'
        ];
    }

    public function getDefaultRoute()
    {
        // return $this->data->url;
        return route('voyager.'.$this->dataType->slug.'.settings', $this->data->{$this->data->getKeyName()});
    }

    public function shouldActionDisplayOnDataType()
    {
        $dataTypes = ['product_groups'];
        return in_array($this->dataType->slug, $dataTypes);
    }
}
