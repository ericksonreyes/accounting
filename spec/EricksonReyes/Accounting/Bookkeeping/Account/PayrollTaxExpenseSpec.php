<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\PayrollTaxExpense;

/**
 * Class PayrollTaxExpenseSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class PayrollTaxExpenseSpec extends ExpenseTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(PayrollTaxExpense::class);
    }
}
