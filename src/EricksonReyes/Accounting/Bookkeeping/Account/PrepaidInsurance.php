<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Asset;

/**
 * Class PrepaidInsurance
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class PrepaidInsurance extends Asset
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Prepaid Insurance';
    }
}
