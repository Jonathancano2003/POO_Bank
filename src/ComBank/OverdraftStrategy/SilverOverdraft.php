<?php

namespace ComBank\OverdraftStrategy;

use ComBank\OverdraftStrategy\Contracts\OverdraftInterface;

/**
 * Created by VS Code.
 * User: JPortugal
 * Date: 7/28/24
 * Time: 1:39 PM
 */

/**
 * @description: Grant 100.00 overdraft funds.
 * */
class SilverOverdraft implements OverdraftInterface
{

    private float $overdraftLimit;

    public function __construct(float $limit)
    {
        $this->overdraftLimit = $limit;
    }

    public function isGrantOverdraftFunds(float $amount): bool
    {
        return $amount <= $this->overdraftLimit;
    }

    public function getOverdraftFundsAmount(): float
    {
        return $this->overdraftLimit;
    }
}
