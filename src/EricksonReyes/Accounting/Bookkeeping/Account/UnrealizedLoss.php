<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Loss;

/**
 * Class UnrealizedLoss
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class UnrealizedLoss extends Loss
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Unrealized Loss';
    }
}
