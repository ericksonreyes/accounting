<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\CurrencyExchangeGain;

/**
 * Class CurrencyExchangeGainSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class CurrencyExchangeGainSpec extends GainTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(CurrencyExchangeGain::class);
    }
}
