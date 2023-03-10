<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\ContraLiability;

/**
 * Class DiscountOnNotesPayable
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class DiscountOnNotesPayable extends ContraLiability
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Discount On Notes Payable';
    }
}
