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

    public static function make($startDate, $endDate): self
    {
        return new self($startDate, $endDate);
    }

    public static function days(int $days): self
    {
        $endDate = Carbon::today();
        $startDate = Carbon::today()->subDays($days);

        return new self($startDate, $endDate);
    }

    public static function weeks(int $weeks): self
    {
        $endDate = Carbon::today();
        $startDate = Carbon::today()->subWeeks($weeks)->startOfDay();

        return new self($startDate, $endDate);
    }

    public static function months(int $months): self
    {
        $endDate = Carbon::today();
        $startDate = Carbon::today()->subMonths($months)->startOfDay();

        return new self($startDate, $endDate);
    }

    public static function years(int $years): self
    {
        $endDate = Carbon::today();
        $startDate = Carbon::today()->subYears($years)->startOfDay();

        return new self($startDate, $endDate);
    }

    public static function since($startDate): self
    {
        return new self($startDate, Carbon::today());
    }

    public static function hours(int $hours): self
    {
        $endDate = Carbon::now();
        $startDate = Carbon::now()->subHours($hours);

        return new self($startDate, $endDate);
    }

    public static function minutes(int $minutes): self
    {
        $endDate = Carbon::now();
        $startDate = Carbon::now()->subMinutes($minutes);

        return new self($startDate, $endDate);
    }
}
