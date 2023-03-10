<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Expense;

/**
 * Class DepreciationExpense
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class DepreciationExpense extends Expense
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Depreciation Expense';
    }
}
