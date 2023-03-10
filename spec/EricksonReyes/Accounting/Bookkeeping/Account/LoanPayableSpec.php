<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\LoanPayable;

/**
 * Class LoanPayableSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class LoanPayableSpec extends LiabilityTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(LoanPayable::class);
    }
}
