<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\ContraAsset;

/**
 * Class AllowanceForUncollectibleAccounts
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class AllowanceForUncollectibleAccounts extends ContraAsset
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Allowance For Uncollectible Accounts';
    }
}
