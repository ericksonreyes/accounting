<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\WarrantyExpense;

/**
 * Class WarrantyExpenseSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class WarrantyExpenseSpec extends ExpenseTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(WarrantyExpense::class);
    }
}
