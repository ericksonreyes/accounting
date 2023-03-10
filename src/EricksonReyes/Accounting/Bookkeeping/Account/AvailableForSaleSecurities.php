<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Asset;

/**
 * Class AvailableForSaleSecurities
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class AvailableForSaleSecurities extends Asset
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Available For Sale Securities';
    }
}
