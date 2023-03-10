<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\CharityContributionsPayable;

/**
 * Class CharityContributionsPayableSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class CharityContributionsPayableSpec extends LiabilityTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(CharityContributionsPayable::class);
    }
}
