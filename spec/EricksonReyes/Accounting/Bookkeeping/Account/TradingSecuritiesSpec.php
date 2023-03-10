<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\TradingSecurities;

/**
 * Class TradingSecuritiesSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class TradingSecuritiesSpec extends AssetTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(TradingSecurities::class);
    }
}
