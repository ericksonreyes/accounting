<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Liability;

/**
 * Class SalariesPayable
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class SalariesPayable extends Liability
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Salaries Payable';
    }
}
