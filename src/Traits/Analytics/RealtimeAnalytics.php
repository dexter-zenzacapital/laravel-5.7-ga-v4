<?php

namespace Vormkracht10\Analytics\Traits\Analytics;

use Illuminate\Support\Arr;
use Vormkracht10\Analytics\Period;

trait RealtimeAnalytics
{
    /**
     * @throws \Google\ApiCore\ApiException
     * @throws \Google\ApiCore\ValidationException
     */
    public function activeUsers($period = null)
    {
        if (is_null($period)) {
            $period = Period::minutes(30);
        }

        $googleAnalytics = $this->googleAnalytics
            ->setDateRange($period)
            ->addMetrics('activeUsers');

        $result = $this->getReport($googleAnalytics)
            ->dataTable;

        return (int) Arr::first(Arr::flatten($result));
    }
}
