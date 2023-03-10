<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\AmortizationExpense;

/**
 * Class AmortizationExpenseSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class AmortizationExpenseSpec extends ExpenseTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(AmortizationExpense::class);
    }
}
