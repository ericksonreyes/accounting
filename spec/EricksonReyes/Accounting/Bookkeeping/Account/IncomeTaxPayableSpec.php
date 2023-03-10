<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\IncomeTaxPayable;

/**
 * Class IncomeTaxPayableSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class IncomeTaxPayableSpec extends LiabilityTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(IncomeTaxPayable::class);
    }
}
