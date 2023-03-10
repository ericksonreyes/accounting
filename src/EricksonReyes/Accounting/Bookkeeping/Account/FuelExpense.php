<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Expense;

/**
 * Class FuelExpense
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class FuelExpense extends Expense
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Fuel Expense';
    }
}
