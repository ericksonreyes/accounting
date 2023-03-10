<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Expense;

/**
 * Class Subscription
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class Subscription extends Expense
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Subscription';
    }
}
