<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Expense;

/**
 * Class RepairExpense
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class RepairExpense extends Expense
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Repair Expense';
    }
}
