<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\RentExpense;

/**
 * Class RentExpenseSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class RentExpenseSpec extends ExpenseTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(RentExpense::class);
    }
}
