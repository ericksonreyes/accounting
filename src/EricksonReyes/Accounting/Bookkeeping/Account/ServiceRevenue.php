<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Revenue;

/**
 * Class ServiceRevenue
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class ServiceRevenue extends Revenue
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Service Revenue';
    }
}
