<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\ObligationUnderCapitalLease;

/**
 * Class ObligationUnderCapitalLeaseSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class ObligationUnderCapitalLeaseSpec extends LiabilityTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(ObligationUnderCapitalLease::class);
    }
}
