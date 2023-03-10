<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Asset;

/**
 * Class Inventory
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class Inventory extends Asset
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Inventory';
    }
}
