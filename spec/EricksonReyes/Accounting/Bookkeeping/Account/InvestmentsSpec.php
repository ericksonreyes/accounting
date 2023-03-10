<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\Investments;

/**
 * Class InvestmentsSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class InvestmentsSpec extends AssetTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(Investments::class);
    }
}
