<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Expense;

/**
 * Class CashShort
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class CashShort extends Expense
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Cash Short';
    }
}
