<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\Gain;

/**
 * Class GainSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class GainSpec extends GainTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(Gain::class);
    }
}
