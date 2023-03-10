<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\InterestExpense;

/**
 * Class InterestExpenseSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class InterestExpenseSpec extends ExpenseTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(InterestExpense::class);
    }
}
