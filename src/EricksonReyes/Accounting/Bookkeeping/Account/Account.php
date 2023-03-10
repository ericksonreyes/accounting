<?php

namespace EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\AccountType;
use EricksonReyes\Accounting\Bookkeeping\Entry\EntryType;

/**
 * Interface Account
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
interface Account
{
    /**
     * @return \EricksonReyes\Accounting\Bookkeeping\Entry\EntryType
     */
    public function increasedVia(): EntryType;

    /**
     * @return \EricksonReyes\Accounting\Bookkeeping\Entry\EntryType
     */
    public function decreasedVia(): EntryType;

    /**
     * @return \EricksonReyes\Accounting\Bookkeeping\AccountType\AccountType
     */
    public function type(): AccountType;

    /**
     * @return string
     */
    public function name(): string;
}
