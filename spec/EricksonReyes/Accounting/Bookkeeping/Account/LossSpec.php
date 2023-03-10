<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\Loss;

/**
 * Class LossSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class LossSpec extends LossTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(Loss::class);
    }
}
