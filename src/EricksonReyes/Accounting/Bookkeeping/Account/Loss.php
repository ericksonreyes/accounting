<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Loss as LossInterface;

/**
 * Class Loss
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class Loss extends LossInterface
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Loss';
    }
}
