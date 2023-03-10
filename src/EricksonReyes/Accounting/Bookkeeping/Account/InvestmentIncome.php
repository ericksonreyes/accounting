<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Revenue;

/**
 * Class InvestmentIncome
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class InvestmentIncome extends Revenue
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Investment Revenue';
    }
}
