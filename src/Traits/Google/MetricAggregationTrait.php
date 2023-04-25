<?php

namespace Vormkracht10\Analytics\Traits\Google;

trait MetricAggregationTrait
{
    public $metricAggregations = [];

    public function setMetricAggregation($value)
    {
        $this->metricAggregations = [
            $value,
        ];

        return $this;
    }

    public function setMetricAggregations(...$values)
    {
        $this->metricAggregations = $values;

        return $this;
    }
}
