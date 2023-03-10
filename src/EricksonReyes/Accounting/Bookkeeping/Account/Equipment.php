<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Asset;

/**
 * Class Equipment
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class Equipment extends Asset
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Equipment';
    }
}
