<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\SalesReturns;

/**
 * Class SalesReturnsSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class SalesReturnsSpec extends ContraRevenueTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(SalesReturns::class);
    }
}
