<?php

namespace EricksonReyes\Accounting\Bookkeeping\AccountType;

use EricksonReyes\Accounting\Bookkeeping\Account\Account;
use EricksonReyes\Accounting\Bookkeeping\Entry\EntryType;

/**
 * Interface Revenue
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
abstract class Revenue implements Account
{
    /**
     * @return \EricksonReyes\Accounting\Bookkeeping\Entry\EntryType
     */
    public function increasedVia(): EntryType
    {
        return EntryType::CREDIT;
    }

    /**
     * @return \EricksonReyes\Accounting\Bookkeeping\Entry\EntryType
     */
    public function decreasedVia(): EntryType
    {
        return EntryType::DEBIT;
    }

    /**
     * @return \EricksonReyes\Accounting\Bookkeeping\AccountType\AccountType
     */
    public function type(): AccountType
    {
        return AccountType::REVENUE;
    }
}
