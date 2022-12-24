<?php

namespace Botble\Analytics;

use Botble\Analytics\Exceptions\InvalidPeriod;
use DateTime;
use DateTimeInterface;

class Period
{
    public DateTimeInterface|DateTime $startDate;

    public DateTimeInterface $endDate;

    public function __construct(DateTimeInterface $startDate, DateTimeInterface $endDate)
    {
        if ($startDate > $endDate) {
            throw InvalidPeriod::startDateCannotBeAfterEndDate($startDate, $endDate);
        }

        $this->startDate = $startDate;

        $this->endDate = $endDate;
    }

    public static function create(DateTimeInterface $startDate, DateTimeInterface $endDate): static
    {
        return new static($startDate, $endDate);
    }

    public static function days(int $numberOfDays): static
    {
        $endDate = today();

        $startDate = today()->subDays($numberOfDays)->startOfDay();

        return new static($startDate, $endDate);
    }

    public static function months(int $numberOfMonths): static
    {
        $endDate = today();

        $startDate = today()->subMonths($numberOfMonths)->startOfDay();

        return new static($startDate, $endDate);
    }

    public static function years(int $numberOfYears): static
    {
        $endDate = today();

        $startDate = today()->subYears($numberOfYears)->startOfDay();

        return new static($startDate, $endDate);
    }
}
