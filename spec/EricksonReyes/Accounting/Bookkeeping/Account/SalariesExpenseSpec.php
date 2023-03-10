<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\SalariesExpense;

/**
 * Class SalariesExpenseSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class SalariesExpenseSpec extends ExpenseTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(SalariesExpense::class);
    }
}
