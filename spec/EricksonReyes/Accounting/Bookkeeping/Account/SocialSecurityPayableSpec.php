<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\SocialSecurityPayable;

/**
 * Class SocialSecurityPayableSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class SocialSecurityPayableSpec extends LiabilityTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(SocialSecurityPayable::class);
    }
}
