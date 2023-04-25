<?php

namespace Vormkracht10\Analytics\Traits\Analytics;

use Illuminate\Support\Arr;

trait UsersAnalytics
{
    /**
     * @throws \Google\ApiCore\ApiException
     * @throws \Google\ApiCore\ValidationException
     */
    public function totalUsers($period)
    {
        $googleAnalytics = $this->googleAnalytics
            ->setDateRange($period)
            ->addMetrics('totalUsers');

        $result = $this->getReport($googleAnalytics)
            ->dataTable;

        return (int) Arr::first(Arr::flatten($result));
    }

    /**
     * @throws \Google\ApiCore\ApiException
     * @throws \Google\ApiCore\ValidationException
     */
    public function totalUsersByDate($period)
    {
        $googleAnalytics = $this->googleAnalytics
            ->setDateRange($period)
            ->addMetrics('totalUsers')
            ->addDimensions('date');

        return $this->getReport($googleAnalytics)
            ->dataTable;
    }

    /**
     * @throws \Google\ApiCore\ApiException
     * @throws \Google\ApiCore\ValidationException
     */
    public function totalUsersBySessionSource($period)
    {
        $googleAnalytics = $this->googleAnalytics
            ->setDateRange($period)
            ->addMetrics('totalUsers')
            ->addDimensions('sessionSource');

        return $this->getReport($googleAnalytics)
            ->dataTable;
    }

    /**
     * @throws \Google\ApiCore\ApiException
     * @throws \Google\ApiCore\ValidationException
     */
    public function totalUsersBySessionMedium($period)
    {
        $googleAnalytics = $this->googleAnalytics
            ->setDateRange($period)
            ->addMetrics('totalUsers')
            ->addDimensions('sessionMedium');

        return $this->getReport($googleAnalytics)
            ->dataTable;
    }

    /**
     * @throws \Google\ApiCore\ApiException
     * @throws \Google\ApiCore\ValidationException
     */
    public function totalUsersBySessionDevice($period)
    {
        $googleAnalytics = $this->googleAnalytics
            ->setDateRange($period)
            ->addMetrics('totalUsers')
            ->addDimensions('sessionDevice');

        return $this->getReport($googleAnalytics)
            ->dataTable;
    }
}
