<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\RetirementContributionPayable;

/**
 * Class RetirementContributionPayableSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class RetirementContributionPayableSpec extends LiabilityTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(RetirementContributionPayable::class);
    }
}
