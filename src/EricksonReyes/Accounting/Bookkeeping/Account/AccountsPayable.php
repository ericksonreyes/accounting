<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Liability;

/**
 * Class AccountsPayable
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class AccountsPayable extends Liability
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Accounts Payable';
    }
}
