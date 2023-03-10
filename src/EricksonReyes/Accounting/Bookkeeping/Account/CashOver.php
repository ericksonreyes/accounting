<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Revenue;

/**
 * Class CashOver
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class CashOver extends Revenue
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Revenue';
    }
}
