<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\AllowanceForUncollectibleAccounts;

/**
 * Class AllowanceForUncollectibleAccountsSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class AllowanceForUncollectibleAccountsSpec extends ContraAssetTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(AllowanceForUncollectibleAccounts::class);
    }
}
