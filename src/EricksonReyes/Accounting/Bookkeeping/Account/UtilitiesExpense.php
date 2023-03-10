<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Expense;

/**
 * Class UtilitiesExpense
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class UtilitiesExpense extends Expense
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Utilities Expense';
    }
}
