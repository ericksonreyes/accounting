<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Expense;

/**
 * Class InsuranceExpense
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class InsuranceExpense extends Expense
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Insurance Expense';
    }
}
