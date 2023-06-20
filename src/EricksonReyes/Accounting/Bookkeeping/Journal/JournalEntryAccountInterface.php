<?php

namespace EricksonReyes\Accounting\Bookkeeping\Journal;

use EricksonReyes\Accounting\Bookkeeping\Account\Account;

/**
 * Interface JournalEntryAccountInterface
 * @package EricksonReyes\Accounting\Bookkeeping\Journal
 */
interface JournalEntryAccountInterface extends Account
{

    /**
     * @return string
     */
    public function folioNumber(): string;

    /**
     * @return float
     */
    public function value(): float;
}
