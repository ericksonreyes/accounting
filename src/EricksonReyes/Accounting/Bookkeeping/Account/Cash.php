<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Asset;

/**
 * Class Cash
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class Cash extends Asset
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Cash';
    }
}
