<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\RepairExpense;

/**
 * Class RepairExpenseSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class RepairExpenseSpec extends ExpenseTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(RepairExpense::class);
    }
}
