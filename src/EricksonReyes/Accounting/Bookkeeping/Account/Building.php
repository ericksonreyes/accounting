<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Asset;

/**
 * Class Building
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class Building extends Asset
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Building';
    }
}
