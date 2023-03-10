<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Liability;

/**
 * Class InterestPayable
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class InterestPayable extends Liability
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Interest Payable';
    }
}
