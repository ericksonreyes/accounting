<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Expense;

/**
 * Class PostageExpense
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class PostageExpense extends Expense
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Postage Expense';
    }
}
