<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Liability;

/**
 * Class NotesPayable
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class NotesPayable extends Liability
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'NotesPayable';
    }
}
