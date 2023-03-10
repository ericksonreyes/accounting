<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Equity;

/**
 * Class CapitalStock
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class CapitalStock extends Equity
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Capital Stock';
    }
}
