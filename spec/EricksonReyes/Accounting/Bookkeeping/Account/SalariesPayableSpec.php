<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\SalariesPayable;

/**
 * Class SalariesPayableSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class SalariesPayableSpec extends LiabilityTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(SalariesPayable::class);
    }
}
