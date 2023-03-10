<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Liability;

/**
 * Class DividendsPayable
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class DividendsPayable extends Liability
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Dividends Payable';
    }
}
