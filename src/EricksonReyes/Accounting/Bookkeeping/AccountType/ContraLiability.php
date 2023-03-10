<?php

namespace EricksonReyes\Accounting\Bookkeeping\AccountType;

use EricksonReyes\Accounting\Bookkeeping\Account\Account;
use EricksonReyes\Accounting\Bookkeeping\Entry\EntryType;

/**
 * Class ContraLiability
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
abstract class ContraLiability implements Account
{
    /**
     * @return \EricksonReyes\Accounting\Bookkeeping\Entry\EntryType
     */
    public function increasedVia(): EntryType
    {
        return EntryType::DEBIT;
    }

    /**
     * @return \EricksonReyes\Accounting\Bookkeeping\Entry\EntryType
     */
    public function decreasedVia(): EntryType
    {
        return EntryType::CREDIT;
    }

    /**
     * @return \EricksonReyes\Accounting\Bookkeeping\AccountType\AccountType
     */
    public function type(): AccountType
    {
        return AccountType::CONTRA_LIABILITY;
    }
}
