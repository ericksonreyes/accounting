<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Revenue;

/**
 * Class InterestIncome
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class InterestIncome extends Revenue
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Interest Income';
    }
}
