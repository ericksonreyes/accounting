<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Expense;

/**
 * Class MealExpense
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class MealExpense extends Expense
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Meal Expense';
    }
}
