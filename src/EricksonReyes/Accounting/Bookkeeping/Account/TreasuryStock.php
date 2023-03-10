<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\ContraEquity;

/**
 * Class TreasuryStock
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class TreasuryStock extends ContraEquity
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Treasury Stock';
    }
}
