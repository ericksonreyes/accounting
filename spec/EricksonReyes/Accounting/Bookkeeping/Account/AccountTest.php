<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\Account;
use EricksonReyes\Accounting\Bookkeeping\Entry\EntryType;
use PhpSpec\ObjectBehavior;

/**
 * Class AccountTest
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 *
 * @method string name
 * @method EntryType type
 */
abstract class AccountTest extends ObjectBehavior
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldImplement(Account::class);
    }

    /**
     * @return void
     */
    public function it_has_name(): void
    {
        $this->name()->shouldBeString();
    }

    public function it_has_a_type_label(): void
    {
        $this->type()->label()->shouldBeString();
    }
}
