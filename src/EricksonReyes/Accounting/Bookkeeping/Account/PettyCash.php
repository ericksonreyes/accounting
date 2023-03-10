<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Asset;

/**
 * Class PettyCash
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class PettyCash extends Asset
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Petty Cash';
    }
}
