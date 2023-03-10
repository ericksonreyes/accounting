<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Liability;

/**
 * Class IncomeTaxPayable
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class IncomeTaxPayable extends Liability
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Income Tax Payable';
    }
}
