<?php

namespace EricksonReyes\Accounting\Bookkeeping\Journal;


/**
 * Interface JournalEntryInterface
 * @package EricksonReyes\Accounting\Bookkeeping\Journal
 */
interface JournalEntryInterface
{
    /**
     * @return string
     */
    public function folioNumber(): string;

    /**
     * @return \DateTimeInterface
     */
    public function date(): \DateTimeInterface;

    /**
     * @return \EricksonReyes\Accounting\Bookkeeping\Journal\JournalEntryAccountInterface
     */
    public function debit(): JournalEntryAccountInterface;

    /**
     * @return \EricksonReyes\Accounting\Bookkeeping\Journal\JournalEntryAccountInterface
     */
    public function credit(): JournalEntryAccountInterface;

    /**
     * @return string
     */
    public function description(): string;
}