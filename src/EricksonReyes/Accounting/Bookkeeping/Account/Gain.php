<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Gain as GainInterface;

/**
 * Class Gain
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class Gain extends GainInterface
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Gain';
    }
}
