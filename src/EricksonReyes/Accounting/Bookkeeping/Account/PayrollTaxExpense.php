<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Expense;

/**
 * Class PayrollTaxExpense
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class PayrollTaxExpense extends Expense
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Payroll Tax Expense';
    }
}
