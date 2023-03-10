<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Asset;

/**
 * Class Appliance
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class Appliance extends Asset
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Appliance';
    }
}
