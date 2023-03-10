<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Asset;

/**
 * Class AccountsReceivable
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class AccountsReceivable extends Asset
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Accounts Receivable';
    }
}
