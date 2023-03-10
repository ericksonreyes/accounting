<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Expense;

/**
 * Class CostOfGoodsSold
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class CostOfGoodsSold extends Expense
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Cost Of Goods Sold';
    }
}
