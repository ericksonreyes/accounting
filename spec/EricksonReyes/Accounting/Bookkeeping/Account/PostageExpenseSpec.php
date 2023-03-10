<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\PostageExpense;

/**
 * Class PostageExpenseSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class PostageExpenseSpec extends ExpenseTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(PostageExpense::class);
    }
}
