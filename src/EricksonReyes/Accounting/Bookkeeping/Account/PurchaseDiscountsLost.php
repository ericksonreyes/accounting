<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Expense;

/**
 * Class PurchaseDiscountsLost
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class PurchaseDiscountsLost extends Expense
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Purchase Discounts Lost';
    }
}
