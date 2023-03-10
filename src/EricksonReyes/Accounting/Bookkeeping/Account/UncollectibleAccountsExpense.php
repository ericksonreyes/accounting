<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Expense;

/**
 * Class UncollectibleAccountsExpense
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class UncollectibleAccountsExpense extends Expense
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Uncollectible Accounts Expense';
    }
}
