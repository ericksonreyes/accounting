<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\PrepaidInsurance;

/**
 * Class PrepaidInsuranceSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class PrepaidInsuranceSpec extends AssetTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(PrepaidInsurance::class);
    }
}
