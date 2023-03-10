<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\Revenue;

/**
 * Class RevenueSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class RevenueSpec extends RevenueTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(Revenue::class);
    }
}
