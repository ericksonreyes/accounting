<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Loss;

/**
 * Class CurrencyExchangeLoss
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class CurrencyExchangeLoss extends Loss
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Currency Exchange Loss';
    }
}
