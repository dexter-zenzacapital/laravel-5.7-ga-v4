<?php

namespace Vormkracht10\Analytics;

use Illuminate\Support\Carbon;
use Vormkracht10\Analytics\Exceptions\InvalidPeriod;

class Period
{
    public $startDate;

    public $endDate;

    final public function __construct($startDate, $endDate)
    {
        if ($startDate->greaterThan($endDate)) {
            throw InvalidPeriod::startDateCannotBeGreaterThanEndDate($startDate, $endDate);
        }

        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }

    public static function make($startDate, $endDate)
    {
        return new self($startDate, $endDate);
    }

    public static function days($days)
    {
        $endDate = Carbon::today();
        $startDate = Carbon::today()->subDays($days);

        return new self($startDate, $endDate);
    }

    public static function weeks($weeks)
    {
        $endDate = Carbon::today();
        $startDate = Carbon::today()->subWeeks($weeks)->startOfDay();

        return new self($startDate, $endDate);
    }

    public static function months($months)
    {
        $endDate = Carbon::today();
        $startDate = Carbon::today()->subMonths($months)->startOfDay();

        return new self($startDate, $endDate);
    }

    public static function years($years)
    {
        $endDate = Carbon::today();
        $startDate = Carbon::today()->subYears($years)->startOfDay();

        return new self($startDate, $endDate);
    }

    public static function since($startDate)
    {
        return new self($startDate, Carbon::today());
    }

    public static function hours($hours)
    {
        $endDate = Carbon::now();
        $startDate = Carbon::now()->subHours($hours);

        return new self($startDate, $endDate);
    }

    public static function minutes($minutes)
    {
        $endDate = Carbon::now();
        $startDate = Carbon::now()->subMinutes($minutes);

        return new self($startDate, $endDate);
    }
}
