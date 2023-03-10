<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\ContraRevenue;

/**
 * Class SalesDiscounts
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class SalesDiscounts extends ContraRevenue
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Sales Discounts';
    }
}
