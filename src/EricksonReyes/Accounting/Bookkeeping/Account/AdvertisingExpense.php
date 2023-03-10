<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Expense;

/**
 * Class AdvertisingExpense
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class AdvertisingExpense extends Expense
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Advertising Expense';
    }
}
