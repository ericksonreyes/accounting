<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Liability;

/**
 * Class MedicarePayable
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class MedicarePayable extends Liability
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Medicare Payable';
    }
}
