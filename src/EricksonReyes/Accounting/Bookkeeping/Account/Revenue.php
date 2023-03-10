<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Revenue as RevenueInterface;

/**
 * Class Revenue
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class Revenue extends RevenueInterface
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Revenue';
    }
}
