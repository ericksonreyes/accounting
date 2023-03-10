<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Asset;

/**
 * Class InvestmentInBonds
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class InvestmentInBonds extends Asset
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Investment In Bonds';
    }
}
