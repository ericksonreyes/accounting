<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\CommonStock;

/**
 * Class CommonStockSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class CommonStockSpec extends EquityTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(CommonStock::class);
    }
}
