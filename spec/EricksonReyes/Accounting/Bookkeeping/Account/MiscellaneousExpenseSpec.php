<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\MiscellaneousExpense;

/**
 * Class MiscellaneousExpenseSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class MiscellaneousExpenseSpec extends ExpenseTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(MiscellaneousExpense::class);
    }
}
