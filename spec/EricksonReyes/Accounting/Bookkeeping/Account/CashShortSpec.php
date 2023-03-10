<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\CashShort;

/**
 * Class CashShortSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class CashShortSpec extends ExpenseTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(CashShort::class);
    }
}
