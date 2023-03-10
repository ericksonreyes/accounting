<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\ContraAsset;

/**
 * Class AccumulatedDepreciation
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class AccumulatedDepreciation extends ContraAsset
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Accumulated Deprecation';
    }
}
