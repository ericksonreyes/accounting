<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\AccountType;
use EricksonReyes\Accounting\Bookkeeping\Entry\EntryType;

/**
 * Class GainTest
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 *
 * @method increasedVia
 * @method decreasedVia
 * @method type
 */
abstract class GainTest extends AccountTest
{
    /**
     * @return void
     */
    public function it_can_be_increased_by_crediting(): void
    {
        $this->increasedVia()->shouldReturn(EntryType::CREDIT);
    }

    /**
     * @return void
     */
    public function it_can_be_decreased_by_debiting(): void
    {
        $this->decreasedVia()->shouldReturn(EntryType::DEBIT);
    }

    /**
     * @return void
     */
    public function it_has_a_type(): void
    {
        $this->type()->shouldReturn(AccountType::GAIN);
    }
}
