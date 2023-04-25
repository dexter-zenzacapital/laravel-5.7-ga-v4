<?php

namespace Vormkracht10\Analytics\Traits\Google;

use Google\Analytics\Data\V1beta\Dimension;

trait DimensionTrait
{
    public $dimensions = [];

    public function addDimension($name)
    {
        $this->dimensions[] = new Dimension([
            'name' => $name,
        ]);

        return $this;
    }

    public function addDimensions(...$dimensions)
    {
        foreach ($dimensions as $dimension) {
            $this->addDimension($dimension);
        }

        return $this;
    }
}
