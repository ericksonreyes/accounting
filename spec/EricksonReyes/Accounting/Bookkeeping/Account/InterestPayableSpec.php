<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\InterestPayable;

/**
 * Class InterestPayableSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class InterestPayableSpec extends LiabilityTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(InterestPayable::class);
    }
}
