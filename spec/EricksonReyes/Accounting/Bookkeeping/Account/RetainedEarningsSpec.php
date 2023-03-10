<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\RetainedEarnings;

/**
 * Class RetainedEarningsSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class RetainedEarningsSpec extends EquityTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(RetainedEarnings::class);
    }
}
