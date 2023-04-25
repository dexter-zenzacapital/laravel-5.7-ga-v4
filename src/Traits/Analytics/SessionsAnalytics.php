<?php

namespace Vormkracht10\Analytics\Traits\Analytics;

use Illuminate\Support\Arr;

trait SessionsAnalytics
{
    /**
     * @throws \Google\ApiCore\ApiException
     * @throws \Google\ApiCore\ValidationException
     */
    public function sessions($period)
    {
        $googleAnalytics = $this->googleAnalytics
            ->setDateRange($period)
            ->addMetrics('sessions');

        $result = $this->getReport($googleAnalytics)
            ->dataTable;

        return (int) Arr::first(Arr::flatten($result));
    }

    /**
     * @throws \Google\ApiCore\ApiException
     * @throws \Google\ApiCore\ValidationException
     */
    public function averageSessionDuration($period)
    {
        $googleAnalytics = $this->googleAnalytics
            ->setDateRange($period)
            ->addMetrics('averageSessionDuration');

        $result = $this->getReport($googleAnalytics)
            ->dataTable;

        return (float) Arr::first(Arr::flatten($result));
    }

    /**
     * @throws \Google\ApiCore\ApiException
     * @throws \Google\ApiCore\ValidationException
     */
    public function averageSessionDurationByDate($period)
    {
        $googleAnalytics = $this->googleAnalytics
            ->setDateRange($period)
            ->addMetrics('averageSessionDuration')
            ->addDimensions('date')
            ->orderByDimension('date')
            ->keepEmptyRows(true);

        return $this->getReport($googleAnalytics)
            ->dataTable;
    }

    /**
     * @throws \Google\ApiCore\ApiException
     * @throws \Google\ApiCore\ValidationException
     */
    public function averageSessionDurationInSecondsByPage($period)
    {
        $googleAnalytics = $this->googleAnalytics
            ->setDateRange($period)
            ->addMetrics('averageSessionDuration')
            ->addDimensions('pagePath');

        return $this->getReport($googleAnalytics)
            ->dataTable;
    }

    /**
     * @throws \Google\ApiCore\ApiException
     * @throws \Google\ApiCore\ValidationException
     */
    public function averagePageViewsPerSession($period)
    {
        $googleAnalytics = $this->googleAnalytics
            ->setDateRange($period)
            ->addMetrics('screenPageViewsPerSession');

        $result = $this->getReport($googleAnalytics)
            ->dataTable;

        return (float) Arr::first(Arr::flatten($result));
    }

    /**
     * @throws \Google\ApiCore\ApiException
     * @throws \Google\ApiCore\ValidationException
     */
    public function averagePageViewsPerSessionByDate($period)
    {
        $googleAnalytics = $this->googleAnalytics
            ->setDateRange($period)
            ->addMetrics('screenPageViewsPerSession')
            ->addDimensions('date')
            ->orderByDimension('date')
            ->keepEmptyRows(true);

        return $this->getReport($googleAnalytics)
            ->dataTable;
    }

    /**
     * @throws \Google\ApiCore\ApiException
     * @throws \Google\ApiCore\ValidationException
     */
    public function averageSessionDurationInSeconds($period)
    {
        $googleAnalytics = $this->googleAnalytics
            ->setDateRange($period)
            ->addMetrics('averageSessionDuration');

        $result = $this->getReport($googleAnalytics)
            ->dataTable;

        return (float) Arr::first(Arr::flatten($result));
    }

    /**
     * @throws \Google\ApiCore\ApiException
     * @throws \Google\ApiCore\ValidationException
     */
    public function averageSessionDurationInSecondsByDate($period)
    {
        $googleAnalytics = $this->googleAnalytics
            ->setDateRange($period)
            ->addMetrics('averageSessionDuration')
            ->addDimensions('date')
            ->orderByDimension('date')
            ->keepEmptyRows(true);

        return $this->getReport($googleAnalytics)
            ->dataTable;
    }

    /**
     * @throws \Google\ApiCore\ApiException
     * @throws \Google\ApiCore\ValidationException
     */
    public function bounceRate($period)
    {
        $googleAnalytics = $this->googleAnalytics
            ->setDateRange($period)
            ->addMetrics('bounceRate');

        $result = $this->getReport($googleAnalytics)
            ->dataTable;

        return (float) Arr::first(Arr::flatten($result));
    }

    /**
     * @throws \Google\ApiCore\ApiException
     * @throws \Google\ApiCore\ValidationException
     */
    public function bounceRateByDate($period)
    {
        $googleAnalytics = $this->googleAnalytics
            ->setDateRange($period)
            ->addMetrics('bounceRate')
            ->addDimensions('date')
            ->orderByDimension('date')
            ->keepEmptyRows(true);

        return $this->getReport($googleAnalytics)
            ->dataTable;
    }

    /**
     * @throws \Google\ApiCore\ApiException
     * @throws \Google\ApiCore\ValidationException
     */
    public function bounceRateByPage($period)
    {
        $googleAnalytics = $this->googleAnalytics
            ->setDateRange($period)
            ->addMetrics('bounceRate')
            ->addDimensions('pagePath')
            ->orderByDimension('bounceRate')
            ->keepEmptyRows(true);

        return $this->getReport($googleAnalytics)
            ->dataTable;
    }
}
