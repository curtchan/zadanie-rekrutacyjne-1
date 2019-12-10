<?php

namespace App\Interfaces;

interface ClientInterface
{
    /**
     * @param string $table
     * @param string $currency
     * @param \DateTimeImmutable $dateFrom
     * @param \DateTimeImmutable $dateTo
     *
     * @return array
     */
    public function getExchangeRatesBetween($table, $currency, \DateTimeImmutable $dateFrom, \DateTimeImmutable $dateTo);

    public function getExchangeRateForDay($table, $currency, \DateTimeImmutable $date);
}
