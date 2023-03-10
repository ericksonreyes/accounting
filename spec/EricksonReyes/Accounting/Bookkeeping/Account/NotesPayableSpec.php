<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\NotesPayable;

/**
 * Class NotesPayableSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class NotesPayableSpec extends LiabilityTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(NotesPayable::class);
    }
}
