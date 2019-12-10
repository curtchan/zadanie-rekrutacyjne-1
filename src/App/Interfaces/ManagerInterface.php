<?php

namespace App\Interfaces;

interface ManagerInterface
{
    /**
     * W przypadku braku, powinna zwrócić NULL (kursy dostępne są tylko w dni robocze)
     *
     * @param string $currency
     * @param \DateTimeImmutable $date
     * @return float|null
     */
    public function getExchangeRateForDay($currency, \DateTimeImmutable $date);

    /**
     * @param string $currency
     * @param \DateTimeImmutable $month
     * @return float
     */
    public function getLastExchangeRateForMonth($currency, \DateTimeImmutable $month);
}