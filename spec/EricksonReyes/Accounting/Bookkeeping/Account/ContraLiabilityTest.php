<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\AccountType\AccountType;
use EricksonReyes\Accounting\Bookkeeping\Entry\EntryType;

/**
 * Class ContraLiabilityTest
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 *
 * @method increasedVia
 * @method decreasedVia
 * @method type
 */
abstract class ContraLiabilityTest extends AccountTest
{
    /**
     * @return void
     */
    public function it_can_be_increased_by_debiting(): void
    {
        $this->increasedVia()->shouldReturn(EntryType::DEBIT);
        $this->increasedVia()->label()->shouldReturn(EntryType::DEBIT->label());
    }

    /**
     * @return void
     */
    public function it_can_be_decreased_by_crediting(): void
    {
        $this->decreasedVia()->shouldReturn(EntryType::CREDIT);
        $this->decreasedVia()->label()->shouldReturn(EntryType::CREDIT->label());
    }

    /**
     * @return void
     */
    public function it_has_a_type(): void
    {
        $this->type()->shouldReturn(AccountType::CONTRA_LIABILITY);
    }
}
