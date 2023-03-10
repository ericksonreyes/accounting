<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Liability;

/**
 * Class ObligationUnderCapitalLease
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class ObligationUnderCapitalLease extends Liability
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Obligation Under Capital Lease';
    }
}
