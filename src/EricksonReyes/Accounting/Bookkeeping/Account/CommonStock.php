<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Equity;

/**
 * Class CommonStock
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class CommonStock extends Equity
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Common Stock';
    }
}
