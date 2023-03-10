<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\InvestmentInBonds;

/**
 * Class InvestmentInBondsSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class InvestmentInBondsSpec extends AssetTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(InvestmentInBonds::class);
    }
}
