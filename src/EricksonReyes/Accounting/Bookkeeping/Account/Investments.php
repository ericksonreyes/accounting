<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Asset;

class Investments extends Asset
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Investments';
    }
}
