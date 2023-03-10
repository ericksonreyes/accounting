<?php

namespace EricksonReyes\Accounting\Bookkeeping\Entry;

/**
 * Class EntryType
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
enum EntryType
{
    case DEBIT;

    case CREDIT;

    /**
     * @return string
     */
    public function label(): string
    {
        return match ($this) {
            self::DEBIT => 'Debit',
            self::CREDIT => 'Credit'
        };
    }
}
