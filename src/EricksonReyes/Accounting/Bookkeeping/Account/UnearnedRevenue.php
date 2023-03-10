<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Liability;

/**
 * Class UnearnedRevenue
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class UnearnedRevenue extends Liability
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Unearned Revenue';
    }
}
