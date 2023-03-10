<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Gain;

/**
 * Class UnrealizedGain
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class UnrealizedGain extends Gain
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Unrealized Gain';
    }
}
