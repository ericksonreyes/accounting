<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\WarrantyLiability;

/**
 * Class WarrantyLiabilitySpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class WarrantyLiabilitySpec extends LiabilityTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(WarrantyLiability::class);
    }
}
