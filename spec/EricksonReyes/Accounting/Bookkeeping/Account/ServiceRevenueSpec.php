<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\ServiceRevenue;

/**
 * Class ServiceRevenueSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class ServiceRevenueSpec extends RevenueTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(ServiceRevenue::class);
    }
}
