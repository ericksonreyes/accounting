<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\ServiceCharge;

/**
 * Class ServiceChargeSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class ServiceChargeSpec extends ExpenseTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(ServiceCharge::class);
    }
}
