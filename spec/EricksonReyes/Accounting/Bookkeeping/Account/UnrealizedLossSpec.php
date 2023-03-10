<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\UnrealizedLoss;

/**
 * Class UnrealizedLossSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class UnrealizedLossSpec extends LossTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(UnrealizedLoss::class);
    }
}
