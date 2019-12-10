<?php

namespace App\Interfaces;

interface ClientInterface
{
    /**
     * @param string $table
     * @param string $currency
     * @param \DateTime $dateFrom
     * @param \DateTime $dateTo
     *
     * @return array
     */
    public function getExchangeRatesBetween($table, $currency, \DateTime $dateFrom, \DateTime $dateTo);

    /**
     * @param $table
     * @param $currency
     * @param \DateTime $date
     *
     * @return float|null
     */
    public function getExchangeRateForDay($table, $currency, \DateTime $date);
}
