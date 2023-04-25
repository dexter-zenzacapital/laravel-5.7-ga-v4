<?php

namespace Vormkracht10\Analytics;

use Google\Analytics\Data\V1beta\RunReportResponse;

class AnalyticsResponse
{
    public $response;

    public $dataTable;

    public $metricAggregationsTable;

    public function setResponse($response)
    {
        $this->response = $response;

        return $this;
    }

    public function setDataTable($dataTable)
    {
        $this->dataTable = $dataTable;

        return $this;
    }

    public function setMetricAggregationsTable($metricAggregationsTable)
    {
        $this->metricAggregationsTable = $metricAggregationsTable;

        return $this;
    }
}
