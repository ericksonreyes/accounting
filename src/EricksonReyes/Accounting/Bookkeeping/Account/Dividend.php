<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Dividend as DividendInterface;

/**
 * Class Dividends
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class Dividend extends DividendInterface
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Dividend';
    }
}
