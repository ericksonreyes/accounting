<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Asset;

/**
 * Class DomainName
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class DomainName extends Asset
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Domain Name';
    }
}
