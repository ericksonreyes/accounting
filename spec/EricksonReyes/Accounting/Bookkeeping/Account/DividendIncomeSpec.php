<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\DividendIncome;

/**
 * Class DividendIncomeSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class DividendIncomeSpec extends RevenueTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(DividendIncome::class);
    }
}
