<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\MedicarePayable;

/**
 * Class MedicarePayableSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class MedicarePayableSpec extends LiabilityTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(MedicarePayable::class);
    }
}
