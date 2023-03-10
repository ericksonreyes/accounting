<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\UnrealizedGain;

/**
 * Class UnrealizedGainSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class UnrealizedGainSpec extends GainTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(UnrealizedGain::class);
    }
}
