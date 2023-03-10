<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\CapitalStock;

/**
 * Class CapitalStockSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class CapitalStockSpec extends EquityTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(CapitalStock::class);
    }
}
