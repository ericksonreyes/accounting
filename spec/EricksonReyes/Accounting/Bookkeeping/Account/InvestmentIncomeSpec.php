<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\InvestmentIncome;

/**
 * Class InvestmentIncomeSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class InvestmentIncomeSpec extends RevenueTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(InvestmentIncome::class);
    }
}
