<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\EmployeeBenefitsExpense;

/**
 * Class EmployeeBenefitsExpenseSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class EmployeeBenefitsExpenseSpec extends ExpenseTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(EmployeeBenefitsExpense::class);
    }
}
