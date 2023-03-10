<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\AccountsReceivable;

/**
 * Class AccountsReceivableSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class AccountsReceivableSpec extends AssetTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(AccountsReceivable::class);
    }
}
