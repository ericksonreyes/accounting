<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\AccountsPayable;

/**
 * Class AccountsPayableSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class AccountsPayableSpec extends LiabilityTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(AccountsPayable::class);
    }
}
