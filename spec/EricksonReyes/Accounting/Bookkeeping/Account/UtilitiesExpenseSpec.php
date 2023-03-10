<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\UtilitiesExpense;

/**
 * Class UtilitiesExpenseSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class UtilitiesExpenseSpec extends ExpenseTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(UtilitiesExpense::class);
    }
}
