<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Asset;

/**
 * Class Land
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class Land extends Asset
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Land';
    }
}
