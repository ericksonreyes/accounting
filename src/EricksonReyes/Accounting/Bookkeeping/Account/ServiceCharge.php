<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Expense;

/**
 * Class ServiceCharge
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class ServiceCharge extends Expense
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Service Charge';
    }
}
