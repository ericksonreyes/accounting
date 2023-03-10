<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\UnearnedRevenue;

/**
 * Class UnearnedRevenueSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class UnearnedRevenueSpec extends LiabilityTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(UnearnedRevenue::class);
    }
}
