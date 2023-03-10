<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\DiscountOnNotesPayable;

/**
 * Class DiscountOnNotesPayableSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class DiscountOnNotesPayableSpec extends ContraLiabilityTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(DiscountOnNotesPayable::class);
    }
}
