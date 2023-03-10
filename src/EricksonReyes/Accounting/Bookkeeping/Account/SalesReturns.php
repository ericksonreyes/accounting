<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\ContraRevenue;

/**
 * Class SalesReturns
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class SalesReturns extends ContraRevenue
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Sales Returns';
    }
}
