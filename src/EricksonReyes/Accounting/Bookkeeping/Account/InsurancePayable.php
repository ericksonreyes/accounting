<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Liability;

/**
 * Class InsurancePayable
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class InsurancePayable extends Liability
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Insurance Payable';
    }
}
