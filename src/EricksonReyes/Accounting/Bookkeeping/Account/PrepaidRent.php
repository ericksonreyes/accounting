<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Asset;

/**
 * Class PrepaidRent
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class PrepaidRent extends Asset
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Prepaid Rent';
    }
}
