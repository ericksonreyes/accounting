<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\Asset;

/**
 * Class NotesReceivable
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
class NotesReceivable extends Asset
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Notes Receivable';
    }
}
