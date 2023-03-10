<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\Land;

/**
 * Class LandSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class LandSpec extends AssetTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(Land::class);
    }
}
