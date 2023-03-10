<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Revenue;

/**
 * Class DividendIncome
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class DividendIncome extends Revenue
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Dividend Income';
    }
}
