<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\InsurancePayable;

/**
 * Class InsurancePayableSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class InsurancePayableSpec extends LiabilityTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(InsurancePayable::class);
    }
}
