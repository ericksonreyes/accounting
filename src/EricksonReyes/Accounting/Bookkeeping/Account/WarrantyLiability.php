<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Liability;

/**
 * Class WarrantyLiability
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class WarrantyLiability extends Liability
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Warranty Liability';
    }
}
