<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\InsuranceExpense;

/**
 * Class InsuranceExpenseSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class InsuranceExpenseSpec extends ExpenseTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(InsuranceExpense::class);
    }
}
