<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\UncollectibleAccountsExpense;

/**
 * Class UncollectibleAccountsExpenseSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class UncollectibleAccountsExpenseSpec extends ExpenseTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(UncollectibleAccountsExpense::class);
    }
}
