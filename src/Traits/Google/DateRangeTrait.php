<?php

namespace Vormkracht10\Analytics\Traits\Google;

use Google\Analytics\Data\V1beta\DateRange;

trait DateRangeTrait
{
    public $dateRanges = [];

    public function setDateRange($period)
    {
        $this->dateRanges = [
            new DateRange([
                'start_date' => $period->startDate->format('Y-m-d'),
                'end_date' => $period->endDate->format('Y-m-d'),
            ]),
        ];

        return $this;
    }

    public function setDateRanges(...$items)
    {
        $this->dateRanges = [];

        foreach ($items as $item) {
            $this->dateRanges[] = new DateRange([
                'start_date' => $item->startDate->format('Y-m-d'),
                'end_date' => $item->endDate->format('Y-m-d'),
            ]);
        }

        return $this;
    }
}
