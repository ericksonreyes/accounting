<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\AvailableForSaleSecurities;

/**
 * Class AvailableForSaleSecuritiesSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class AvailableForSaleSecuritiesSpec extends AssetTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(AvailableForSaleSecurities::class);
    }
}
