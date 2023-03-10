<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Revenue;

/**
 * Class Sales
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class Sales extends Revenue
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Sales';
    }
}
