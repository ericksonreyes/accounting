<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Gain;

/**
 * Class CurrencyExchangeGain
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class CurrencyExchangeGain extends Gain
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Currency Exchange Gain';
    }
}
