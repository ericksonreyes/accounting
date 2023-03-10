<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Equity;

/**
 * Class RetainedEarnings
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class RetainedEarnings extends Equity
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Retained Earnings';
    }
}
