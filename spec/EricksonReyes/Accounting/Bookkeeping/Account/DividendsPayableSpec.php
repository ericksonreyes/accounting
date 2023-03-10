<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\DividendsPayable;

/**
 * Class DividendsPayableSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class DividendsPayableSpec extends LiabilityTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(DividendsPayable::class);
    }
}
