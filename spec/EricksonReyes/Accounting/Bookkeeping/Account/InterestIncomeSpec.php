<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\InterestIncome;

/**
 * Class InterestIncomeSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class InterestIncomeSpec extends RevenueTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(InterestIncome::class);
    }
}
