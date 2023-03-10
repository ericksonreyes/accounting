<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Expense;

/**
 * Class WarrantyExpense
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class WarrantyExpense extends Expense
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Warranty Expense';
    }
}
