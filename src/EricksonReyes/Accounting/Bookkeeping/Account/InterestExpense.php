<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Expense;

/**
 * Class InterestExpense
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class InterestExpense extends Expense
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Interest Expense';
    }
}
