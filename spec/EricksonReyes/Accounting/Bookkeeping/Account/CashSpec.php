<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\Cash;

/**
 * Class CashSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class CashSpec extends AssetTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(Cash::class);
    }
}
