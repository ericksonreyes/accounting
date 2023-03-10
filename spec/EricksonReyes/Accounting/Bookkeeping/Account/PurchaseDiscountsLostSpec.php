<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\PurchaseDiscountsLost;

/**
 * Class PurchaseDiscountsLostSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class PurchaseDiscountsLostSpec extends ExpenseTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(PurchaseDiscountsLost::class);
    }
}
