<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Expense;

/**
 * Class AmortizationExpense
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class AmortizationExpense extends Expense
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Amortization Expense';
    }
}
