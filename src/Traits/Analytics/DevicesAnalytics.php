<?php

namespace Vormkracht10\Analytics\Traits\Analytics;

use Vormkracht10\Analytics\Enums\Direction;

trait DevicesAnalytics
{
    /**
     * @throws \Google\ApiCore\ApiException
     * @throws \Google\ApiCore\ValidationException
     */
    public function topUsersByBrowser($period, $limit = 10)
    {
        $googleAnalytics = $this->googleAnalytics
            ->setDateRange($period)
            ->addMetrics('totalUsers')
            ->addDimensions('browser')
            ->orderByMetric('totalUsers', Direction::DESC)
            ->limit($limit);

        return $this->getReport($googleAnalytics)
            ->dataTable;
    }

    /**
     * @throws \Google\ApiCore\ApiException
     * @throws \Google\ApiCore\ValidationException
     */
    public function totalUsersByBrowser($period)
    {
        $googleAnalytics = $this->googleAnalytics
            ->setDateRange($period)
            ->addMetrics('totalUsers')
            ->addDimensions('browser');

        return $this->getReport($googleAnalytics)
            ->dataTable;
    }

    /**
     * @throws \Google\ApiCore\ApiException
     * @throws \Google\ApiCore\ValidationException
     */
    public function topUsersByOperatingSystem($period, $limit = 10)
    {
        $googleAnalytics = $this->googleAnalytics
            ->setDateRange($period)
            ->addMetrics('totalUsers')
            ->addDimensions('operatingSystem')
            ->orderByMetric('totalUsers', Direction::DESC)
            ->limit($limit);

        return $this->getReport($googleAnalytics)
            ->dataTable;
    }

    /**
     * @throws \Google\ApiCore\ApiException
     * @throws \Google\ApiCore\ValidationException
     */
    public function totalUsersByOperatingSystem($period)
    {
        $googleAnalytics = $this->googleAnalytics
            ->setDateRange($period)
            ->addMetrics('totalUsers')
            ->addDimensions('operatingSystem');

        return $this->getReport($googleAnalytics)
            ->dataTable;
    }

    /**
     * @throws \Google\ApiCore\ApiException
     * @throws \Google\ApiCore\ValidationException
     */
    public function topUsersByDeviceCategory($period, $limit = 10)
    {
        $googleAnalytics = $this->googleAnalytics
            ->setDateRange($period)
            ->addMetrics('totalUsers')
            ->addDimensions('deviceCategory')
            ->orderByMetric('totalUsers', Direction::DESC)
            ->limit($limit);

        return $this->getReport($googleAnalytics)
            ->dataTable;
    }

    /**
     * @throws \Google\ApiCore\ApiException
     * @throws \Google\ApiCore\ValidationException
     */
    public function totalUsersByDeviceCategory($period)
    {
        $googleAnalytics = $this->googleAnalytics
            ->setDateRange($period)
            ->addMetrics('totalUsers')
            ->addDimensions('deviceCategory');

        return $this->getReport($googleAnalytics)
            ->dataTable;
    }

    /**
     * @throws \Google\ApiCore\ApiException
     * @throws \Google\ApiCore\ValidationException
     */
    public function topUsersByMobileDeviceBranding($period, $limit = 10)
    {
        $googleAnalytics = $this->googleAnalytics
            ->setDateRange($period)
            ->addMetrics('totalUsers')
            ->addDimensions('mobileDeviceBranding')
            ->orderByMetric('totalUsers', Direction::DESC)
            ->limit($limit);

        return $this->getReport($googleAnalytics)
            ->dataTable;
    }

    /**
     * @throws \Google\ApiCore\ApiException
     * @throws \Google\ApiCore\ValidationException
     */
    public function totalUsersByMobileDeviceBranding($period)
    {
        $googleAnalytics = $this->googleAnalytics
            ->setDateRange($period)
            ->addMetrics('totalUsers')
            ->addDimensions('mobileDeviceBranding');

        return $this->getReport($googleAnalytics)
            ->dataTable;
    }

    /**
     * @throws \Google\ApiCore\ApiException
     * @throws \Google\ApiCore\ValidationException
     */
    public function topUsersByMobileDeviceModel($period, $limit = 10)
    {
        $googleAnalytics = $this->googleAnalytics
            ->setDateRange($period)
            ->addMetrics('totalUsers')
            ->addDimensions('mobileDeviceModel')
            ->orderByMetric('totalUsers', Direction::DESC)
            ->limit($limit);

        return $this->getReport($googleAnalytics)
            ->dataTable;
    }

    /**
     * @throws \Google\ApiCore\ApiException
     * @throws \Google\ApiCore\ValidationException
     */
    public function totalUsersByMobileDeviceModel($period)
    {
        $googleAnalytics = $this->googleAnalytics
            ->setDateRange($period)
            ->addMetrics('totalUsers')
            ->addDimensions('mobileDeviceModel');

        return $this->getReport($googleAnalytics)
            ->dataTable;
    }

    /**
     * @throws \Google\ApiCore\ApiException
     * @throws \Google\ApiCore\ValidationException
     */
    public function topUsersByMobileInputSelector($period, $limit = 10)
    {
        $googleAnalytics = $this->googleAnalytics
            ->setDateRange($period)
            ->addMetrics('totalUsers')
            ->addDimensions('mobileInputSelector')
            ->orderByMetric('totalUsers', Direction::DESC)
            ->limit($limit);

        return $this->getReport($googleAnalytics)
            ->dataTable;
    }

    /**
     * @throws \Google\ApiCore\ApiException
     * @throws \Google\ApiCore\ValidationException
     */
    public function totalUsersByMobileInputSelector($period)
    {
        $googleAnalytics = $this->googleAnalytics
            ->setDateRange($period)
            ->addMetrics('totalUsers')
            ->addDimensions('mobileInputSelector');

        return $this->getReport($googleAnalytics)
            ->dataTable;
    }

    /**
     * @throws \Google\ApiCore\ApiException
     * @throws \Google\ApiCore\ValidationException
     */
    public function topUsersByMobileDeviceInfo($period, $limit = 10)
    {
        $googleAnalytics = $this->googleAnalytics
            ->setDateRange($period)
            ->addMetrics('totalUsers')
            ->addDimensions('mobileDeviceInfo')
            ->orderByMetric('totalUsers', Direction::DESC)
            ->limit($limit);

        return $this->getReport($googleAnalytics)
            ->dataTable;
    }

    /**
     * @throws \Google\ApiCore\ApiException
     * @throws \Google\ApiCore\ValidationException
     */
    public function totalUsersByMobileDeviceInfo($period)
    {
        $googleAnalytics = $this->googleAnalytics
            ->setDateRange($period)
            ->addMetrics('totalUsers')
            ->addDimensions('mobileDeviceInfo');

        return $this->getReport($googleAnalytics)
            ->dataTable;
    }

    /**
     * @throws \Google\ApiCore\ApiException
     * @throws \Google\ApiCore\ValidationException
     */
    public function topUsersByMobileDeviceMarketingName($period, $limit = 10)
    {
        $googleAnalytics = $this->googleAnalytics
            ->setDateRange($period)
            ->addMetrics('totalUsers')
            ->addDimensions('mobileDeviceMarketingName')
            ->orderByMetric('totalUsers', Direction::DESC)
            ->limit($limit);

        return $this->getReport($googleAnalytics)
            ->dataTable;
    }

    /**
     * @throws \Google\ApiCore\ApiException
     * @throws \Google\ApiCore\ValidationException
     */
    public function totalUsersByMobileDeviceMarketingName($period)
    {
        $googleAnalytics = $this->googleAnalytics
            ->setDateRange($period)
            ->addMetrics('totalUsers')
            ->addDimensions('mobileDeviceMarketingName');

        return $this->getReport($googleAnalytics)
            ->dataTable;
    }

    /**
     * @throws \Google\ApiCore\ApiException
     * @throws \Google\ApiCore\ValidationException
     */
    public function topUsersByScreenResolution($period, $limit = 10)
    {
        $googleAnalytics = $this->googleAnalytics
            ->setDateRange($period)
            ->addMetrics('totalUsers')
            ->addDimensions('screenResolution')
            ->orderByMetric('totalUsers', Direction::DESC)
            ->limit($limit);

        return $this->getReport($googleAnalytics)
            ->dataTable;
    }

    /**
     * @throws \Google\ApiCore\ApiException
     * @throws \Google\ApiCore\ValidationException
     */
    public function totalUsersByScreenResolution($period)
    {
        $googleAnalytics = $this->googleAnalytics
            ->setDateRange($period)
            ->addMetrics('totalUsers')
            ->addDimensions('screenResolution');

        return $this->getReport($googleAnalytics)
            ->dataTable;
    }

    /**
     * @throws \Google\ApiCore\ApiException
     * @throws \Google\ApiCore\ValidationException
     */
    public function topUsersByPlatform($period, $limit = 10)
    {
        $googleAnalytics = $this->googleAnalytics
            ->setDateRange($period)
            ->addMetrics('totalUsers')
            ->addDimensions('platform')
            ->orderByMetric('totalUsers', Direction::DESC)
            ->limit($limit);

        return $this->getReport($googleAnalytics)
            ->dataTable;
    }

    /**
     * @throws \Google\ApiCore\ApiException
     * @throws \Google\ApiCore\ValidationException
     */
    public function totalUsersByPlatform($period)
    {
        $googleAnalytics = $this->googleAnalytics
            ->setDateRange($period)
            ->addMetrics('totalUsers')
            ->addDimensions('platform');

        return $this->getReport($googleAnalytics)
            ->dataTable;
    }
}
