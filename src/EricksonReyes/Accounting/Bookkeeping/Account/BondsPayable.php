<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Liability;

/**
 * Class BondsPayable
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class BondsPayable extends Liability
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Bonds Payable';
    }
}
