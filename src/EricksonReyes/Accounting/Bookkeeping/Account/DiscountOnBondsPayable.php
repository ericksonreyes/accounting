<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Liability;

/**
 * Class DiscountOnBondsPayable
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class DiscountOnBondsPayable extends Liability
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Discount On Bonds Payable';
    }
}
