<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\InterestReceivable;

/**
 * Class InterestReceivableSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class InterestReceivableSpec extends AssetTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(InterestReceivable::class);
    }
}
