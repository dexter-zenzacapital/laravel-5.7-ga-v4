<?php

namespace Vormkracht10\Analytics\Traits\Analytics;

use Vormkracht10\Analytics\Enums\Direction;

trait ResourceAnalytics
{
    public function getTopReferrers($period, $limit)
    {
        $googleAnalytics = $this->googleAnalytics
            ->setDateRange($period)
            ->addMetrics('sessions')
            ->addDimensions('pageReferrer', 'pageTitle')
            ->orderByMetric('sessions', Direction::DESC)
            ->limit($limit);

        return $this->getReport($googleAnalytics)
            ->dataTable;
    }

    public function getLandingPages($period, $limit)
    {
        $googleAnalytics = $this->googleAnalytics
            ->setDateRange($period)
            ->addMetrics('sessions')
            ->addDimensions('landingPage', 'pageTitle')
            ->orderByMetric('sessions', Direction::DESC)
            ->limit($limit);

        return $this->getReport($googleAnalytics)
            ->dataTable;
    }

    public function getTopTrafficSources($period, $limit)
    {
        $googleAnalytics = $this->googleAnalytics
            ->setDateRange($period)
            ->addMetrics('sessions')
            ->addDimensions('defaultChannelGroup')
            ->orderByMetric('sessions', Direction::DESC)
            ->limit($limit);

        return $this->getReport($googleAnalytics)
            ->dataTable;
    }

    public function getTopBacklinks($period, $limit)
    {
        $googleAnalytics = $this->googleAnalytics
            ->setDateRange($period)
            ->addMetrics('sessions')
            ->addDimensions('sessionSourceMedium')
            ->orderByMetric('sessions', Direction::DESC)
            ->limit($limit);

        return $this->getReport($googleAnalytics)
            ->dataTable;
    }

    public function getTopSearches($period, $limit)
    {
        $googleAnalytics = $this->googleAnalytics
            ->setDateRange($period)
            ->addMetrics('sessions')
            ->addDimensions('searchTerm')
            ->orderByMetric('sessions', Direction::DESC)
            ->limit($limit);

        return $this->getReport($googleAnalytics)
            ->dataTable;
    }
}
