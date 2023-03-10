<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Asset;

/**
 * Class InterestReceivable
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class InterestReceivable extends Asset
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Interest Receivable';
    }
}
