<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\FuelExpense;

/**
 * Class FuelExpenseSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class FuelExpenseSpec extends ExpenseTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(FuelExpense::class);
    }
}
