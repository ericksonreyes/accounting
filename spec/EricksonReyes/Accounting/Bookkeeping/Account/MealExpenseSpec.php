<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\MealExpense;

/**
 * Class MealExpenseSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class MealExpenseSpec extends ExpenseTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(MealExpense::class);
    }
}
