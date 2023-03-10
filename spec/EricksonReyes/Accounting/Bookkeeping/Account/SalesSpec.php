<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\Sales;

/**
 * Class SalesSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class SalesSpec extends RevenueTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(Sales::class);
    }
}
