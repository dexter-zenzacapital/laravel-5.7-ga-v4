<?php

namespace Vormkracht10\Analytics\Traits\Google;

use Google\Analytics\Data\V1beta\OrderBy;
use Google\Analytics\Data\V1beta\OrderBy\DimensionOrderBy;
use Google\Analytics\Data\V1beta\OrderBy\MetricOrderBy;
use Vormkracht10\Analytics\Enums\Direction;

trait OrderByTrait
{
    public $orderBys = [];

    public function orderByDimension($name, $direction = Direction::ASC)
    {
        $dimension = new DimensionOrderBy([
            'dimension_name' => $name,
        ]);

        $this->orderBys = [
            (new OrderBy([
                'dimension' => $dimension,
            ]))->setDesc(Direction::DESC->value === $direction->value),
        ];

        return $this;
    }

    public function orderByMetric($name, $direction = Direction::ASC)
    {
        $metric = new MetricOrderBy([
            'metric_name' => $name,
        ]);

        $this->orderBys = [
            (new OrderBy([
                'metric' => $metric,
            ]))->setDesc(Direction::DESC->value === $direction->value),
        ];

        return $this;
    }
}
