<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\CashOver;

/**
 * Class CashOverSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class CashOverSpec extends RevenueTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(CashOver::class);
    }
}
