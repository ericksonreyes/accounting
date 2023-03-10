<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Asset;

/**
 * Class Supplies
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class Supplies extends Asset
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Supplies';
    }
}
