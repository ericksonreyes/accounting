<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Liability;

/**
 * Class RetirementContributionPayable
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class RetirementContributionPayable extends Liability
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Retirement Contribution Payable';
    }
}
