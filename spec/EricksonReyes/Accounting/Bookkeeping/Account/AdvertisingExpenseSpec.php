<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\AdvertisingExpense;

/**
 * Class AdvertisingExpenseSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class AdvertisingExpenseSpec extends ExpenseTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(AdvertisingExpense::class);
    }
}
