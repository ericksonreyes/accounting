<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\BondsPayable;

/**
 * Class BondsPayableSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class BondsPayableSpec extends LiabilityTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(BondsPayable::class);
    }
}
