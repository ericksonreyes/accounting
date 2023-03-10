<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\DiscountOnBondsPayable;

/**
 * Class DiscountOnBondsPayableSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class DiscountOnBondsPayableSpec extends LiabilityTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(DiscountOnBondsPayable::class);
    }
}
