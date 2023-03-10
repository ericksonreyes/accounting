<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Liability;

/**
 * Class LoanPayable
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class LoanPayable extends Liability
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Loan Payable';
    }
}
