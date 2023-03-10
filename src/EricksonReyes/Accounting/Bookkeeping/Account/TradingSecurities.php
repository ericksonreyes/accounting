<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Asset;

/**
 * Class TradingSecurities
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class TradingSecurities extends Asset
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Trading Securities';
    }
}
