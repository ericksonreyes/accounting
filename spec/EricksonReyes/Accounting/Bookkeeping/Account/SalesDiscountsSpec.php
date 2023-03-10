<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\SalesDiscounts;

/**
 * Class SalesDiscountsSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class SalesDiscountsSpec extends ContraRevenueTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(SalesDiscounts::class);
    }
}
