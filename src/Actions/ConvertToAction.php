<?php

namespace Joy\VoyagerConvertTo\Actions;

use Illuminate\Http\Request;
use TCG\Voyager\Actions\AbstractAction;

class ConvertToAction extends AbstractAction
{
    public function getTitle()
    {
        return __('joy-voyager-convert-to::generic.convert_to');
    }

    public function getIcon()
    {
        return 'fa-solid fa-right-left';
    }

    public function getPolicy()
    {
        return 'browse';
    }

    public function getAttributes()
    {
        return [
            'class' => 'btn btn-sm btn-primary pull-right convert-to',
        ];
    }

    public function getDefaultRoute()
    {
        // return route('my.route');
    }

    public function shouldActionDisplayOnDataType()
    {
        return config('joy-voyager-convert-to.enabled', true) !== false
            && isInPatterns(
                $this->dataType->slug,
                config('joy-voyager-convert-to.allowed_slugs', ['*'])
            )
            && !isInPatterns(
                $this->dataType->slug,
                config('joy-voyager-convert-to.not_allowed_slugs', [])
            );
    }

    protected function getSlug(Request $request)
    {
        if (isset($this->slug)) {
            $slug = $this->slug;
        } else {
            $slug = explode('.', $request->route()->getName())[1];
        }

        return $slug;
    }
}
