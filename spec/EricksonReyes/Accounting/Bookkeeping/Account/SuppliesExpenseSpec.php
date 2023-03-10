<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\SuppliesExpense;

/**
 * Class SuppliesExpenseSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class SuppliesExpenseSpec extends ExpenseTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(SuppliesExpense::class);
    }
}
