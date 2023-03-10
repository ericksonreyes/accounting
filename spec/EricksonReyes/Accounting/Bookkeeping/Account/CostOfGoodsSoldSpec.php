<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\CostOfGoodsSold;

/**
 * Class CostOfGoodsSoldSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class CostOfGoodsSoldSpec extends ExpenseTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(CostOfGoodsSold::class);
    }
}
