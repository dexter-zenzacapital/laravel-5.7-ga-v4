<?php

namespace Vormkracht10\Analytics\Traits\Analytics;

use Illuminate\Support\Arr;
use Vormkracht10\Analytics\Enums\Direction;

trait ViewsAnalytics
{
    /**
     * @throws \Google\ApiCore\ApiException
     * @throws \Google\ApiCore\ValidationException
     */
    public function totalViews($period)
    {
        $googleAnalytics = $this->googleAnalytics->setDateRange($period)
            ->addMetrics('screenPageViews');

        $result = $this->getReport($googleAnalytics)
            ->dataTable;

        return (int) Arr::first(Arr::flatten($result));
    }

    /**
     * @throws \Google\ApiCore\ApiException
     * @throws \Google\ApiCore\ValidationException
     */
    public function totalViewsByDate($period)
    {
        $googleAnalytics = $this->googleAnalytics->setDateRange($period)
            ->addMetrics('screenPageViews')
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
    public function totalViewsByPage($period)
    {
        $googleAnalytics = $this->googleAnalytics->setDateRange($period)
            ->addMetrics('screenPageViews')
            ->addDimensions('pageTitle', 'fullPageUrl');

        return $this->getReport($googleAnalytics)
            ->dataTable;
    }

    /**
     * @throws \Google\ApiCore\ApiException
     * @throws \Google\ApiCore\ValidationException
     */
    public function topViewsByPage($period)
    {
        return $this->getViewsByPage($period, Direction::DESC);
    }

    /**
     * @throws \Google\ApiCore\ApiException
     * @throws \Google\ApiCore\ValidationException
     */
    public function leastViewsByPage($period)
    {
        return $this->getViewsByPage($period, Direction::ASC);
    }

    private function getViewsByPage($period, Direction $direction)
    {
        $googleAnalytics = $this->googleAnalytics->setDateRange($period)
            ->addMetrics('screenPageViews')
            ->addDimensions('pageTitle', 'fullPageUrl')
            ->orderByMetric('screenPageViews', $direction);

        return $this->getReport($googleAnalytics)
            ->dataTable;
    }

    /**
     * @throws \Google\ApiCore\ApiException
     * @throws \Google\ApiCore\ValidationException
     */
    public function totalViewsByPagePath($period)
    {
        $googleAnalytics = $this->googleAnalytics->setDateRange($period)
            ->addMetrics('screenPageViews')
            ->addDimensions('pagePath');

        return $this->getReport($googleAnalytics)
            ->dataTable;
    }

    /**
     * @throws \Google\ApiCore\ApiException
     * @throws \Google\ApiCore\ValidationException
     */
    public function topViewsByPagePath($period, int $limit = 10)
    {
        $googleAnalytics = $this->googleAnalytics->setDateRange($period)
            ->addMetrics('screenPageViews')
            ->addDimensions('pagePath')
            ->orderByMetric('screenPageViews', Direction::DESC)
            ->limit($limit);

        return $this->getReport($googleAnalytics)
            ->dataTable;
    }

    /**
     * @throws \Google\ApiCore\ApiException
     * @throws \Google\ApiCore\ValidationException
     */
    public function totalViewsByPageTitle($period)
    {
        $googleAnalytics = $this->googleAnalytics->setDateRange($period)
            ->addMetrics('screenPageViews')
            ->addDimensions('pageTitle');

        return $this->getReport($googleAnalytics)
            ->dataTable;
    }

    /**
     * @throws \Google\ApiCore\ApiException
     * @throws \Google\ApiCore\ValidationException
     */
    public function topViewsByPageTitle($period, int $limit = 10)
    {
        $googleAnalytics = $this->googleAnalytics->setDateRange($period)
            ->addMetrics('screenPageViews')
            ->addDimensions('pageTitle', 'pagePath')
            ->orderByMetric('screenPageViews', Direction::DESC)
            ->limit($limit);

        return $this->getReport($googleAnalytics)
            ->dataTable;
    }

    /**
     * @throws \Google\ApiCore\ApiException
     * @throws \Google\ApiCore\ValidationException
     */
    public function totalViewsByPageUrl($period)
    {
        $googleAnalytics = $this->googleAnalytics->setDateRange($period)
            ->addMetrics('screenPageViews')
            ->addDimensions('fullPageUrl');

        return $this->getReport($googleAnalytics)
            ->dataTable;
    }

    /**
     * @throws \Google\ApiCore\ApiException
     * @throws \Google\ApiCore\ValidationException
     */
    public function topViewsByPageUrl($period, int $limit = 10)
    {
        $googleAnalytics = $this->googleAnalytics->setDateRange($period)
            ->addMetrics('screenPageViews')
            ->addDimensions('fullPageUrl')
            ->orderByMetric('screenPageViews', Direction::DESC)
            ->limit($limit);

        return $this->getReport($googleAnalytics)
            ->dataTable;
    }

    /**
     * @throws \Google\ApiCore\ApiException
     * @throws \Google\ApiCore\ValidationException
     */
    public function totalViewsByCountry($period)
    {
        $googleAnalytics = $this->googleAnalytics->setDateRange($period)
            ->addMetrics('screenPageViews')
            ->addDimensions('country');

        return $this->getReport($googleAnalytics)
            ->dataTable;
    }

    /**
     * @throws \Google\ApiCore\ApiException
     * @throws \Google\ApiCore\ValidationException
     */
    public function topViewsByCountry($period, int $limit = 10)
    {
        $googleAnalytics = $this->googleAnalytics->setDateRange($period)
            ->addMetrics('screenPageViews')
            ->addDimensions('country')
            ->orderByMetric('screenPageViews', Direction::DESC)
            ->limit($limit);

        return $this->getReport($googleAnalytics)
            ->dataTable;
    }

    /**
     * @throws \Google\ApiCore\ApiException
     * @throws \Google\ApiCore\ValidationException
     */
    public function totalViewsByCity($period)
    {
        $googleAnalytics = $this->googleAnalytics->setDateRange($period)
            ->addMetrics('screenPageViews')
            ->addDimensions('city');

        return $this->getReport($googleAnalytics)
            ->dataTable;
    }

    /**
     * @throws \Google\ApiCore\ApiException
     * @throws \Google\ApiCore\ValidationException
     */
    public function topViewsByCity($period, int $limit = 10)
    {
        $googleAnalytics = $this->googleAnalytics->setDateRange($period)
            ->addMetrics('screenPageViews')
            ->addDimensions('city')
            ->orderByMetric('screenPageViews', Direction::DESC)
            ->limit($limit);

        return $this->getReport($googleAnalytics)
            ->dataTable;
    }
}
