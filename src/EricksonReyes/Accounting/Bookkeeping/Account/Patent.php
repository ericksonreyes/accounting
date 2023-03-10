<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Asset;

/**
 * Class Patent
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class Patent extends Asset
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Patent';
    }
}
