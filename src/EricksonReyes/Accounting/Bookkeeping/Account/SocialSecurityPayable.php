<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Liability;

/**
 * Class SocialSecurityPayable
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class SocialSecurityPayable extends Liability
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Social Security Payable';
    }
}
