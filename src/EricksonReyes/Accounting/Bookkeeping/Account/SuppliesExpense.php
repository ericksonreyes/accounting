<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Expense;

/**
 * Class SuppliesExpense
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class SuppliesExpense extends Expense
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Supplies Expense';
    }
}
