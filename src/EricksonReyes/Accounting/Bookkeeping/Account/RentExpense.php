<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Expense;

/**
 * Class RentExpense
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class RentExpense extends Expense
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Rent Expense';
    }
}
