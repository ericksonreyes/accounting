<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\PrepaidRent;

/**
 * Class PrepaidRentSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class PrepaidRentSpec extends AssetTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(PrepaidRent::class);
    }
}
