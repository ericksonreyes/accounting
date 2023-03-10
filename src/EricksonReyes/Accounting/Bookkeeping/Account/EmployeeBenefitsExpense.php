<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Expense;

/**
 * Class EmployeeBenefitsExpense
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class EmployeeBenefitsExpense extends Expense
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Employee Benefits Expense';
    }
}
