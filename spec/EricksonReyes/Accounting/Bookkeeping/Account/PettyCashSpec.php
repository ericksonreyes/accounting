<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\PettyCash;

/**
 * Class PettyCashSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class PettyCashSpec extends AssetTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(PettyCash::class);
    }
}
