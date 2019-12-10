<?php

namespace App\Interfaces;

interface ManagerInterface
{
    /**
     * W przypadku braku, powinna zwrócić NULL (kursy dostępne są tylko w dni robocze)
     *
     * @param string $currency
     * @param \DateTime $date
     *
     * @return float|null
     */
    public function getAverageExchangeRateForDay($currency, \DateTime $date);

    /**
     * @param string $currency
     * @param \DateTime $month
     *
     * @return float
     */
    public function getLastAverageExchangeRateForMonth($currency, \DateTime $month);
}
