<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\TreasuryStock;

/**
 * Class TreasuryStockSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class TreasuryStockSpec extends ContraEquityTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(TreasuryStock::class);
    }
}
