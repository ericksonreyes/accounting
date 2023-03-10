<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Liability;

/**
 * Class CharityContributionsPayable
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class CharityContributionsPayable extends Liability
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Charity Contributions Payable';
    }
}
