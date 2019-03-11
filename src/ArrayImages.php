<?php

namespace Halimtuhu\ArrayImages;

use Laravel\Nova\Fields\Field;
use Laravel\Nova\Http\Requests\NovaRequest;

class ArrayImages extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'array-images';

    /**
     * Specify target disk
     *
     * @param $disk
     * @return ArrayImages
     */
    public function disk($disk)
    {
        return $this->withMeta([
            'disk' => $disk
        ]);
    }

    /**
     * Specify target path
     *
     * @param $path
     * @return ArrayImages
     */
    public function path($path)
    {
        return $this->withMeta([
            'path' => $path
        ]);
    }

    protected function fillAttributeFromRequest(NovaRequest $request,
                                                $requestAttribute,
                                                $model,
                                                $attribute)
    {
        if ($request->exists($requestAttribute)) {
            $model->{$attribute} = $request[$requestAttribute];

        }
    }
}
