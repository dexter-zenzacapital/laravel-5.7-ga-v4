<?php

namespace Vormkracht10\Analytics\Traits\Google;

use Google\Analytics\Data\V1beta\Metric;

trait MetricTrait
{
    public $metrics = [];

    public function addMetric($name)
    {
        $this->metrics[] = new Metric([
            'name' => $name,
        ]);

        return $this;
    }

    public function addMetrics(...$metrics)
    {
        foreach ($metrics as $metric) {
            $this->addMetric($metric);
        }

        return $this;
    }
}
