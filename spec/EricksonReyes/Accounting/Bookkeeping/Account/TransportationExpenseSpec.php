<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\TransportationExpense;

/**
 * Class TransportationExpenseSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class TransportationExpenseSpec extends ExpenseTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(TransportationExpense::class);
    }
}
