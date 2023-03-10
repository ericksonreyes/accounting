<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\Patent;

/**
 * Class PatentSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class PatentSpec extends AssetTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(Patent::class);
    }
}
