<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\NotesReceivable;

/**
 * Class NotesReceivableSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class NotesReceivableSpec extends AssetTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(NotesReceivable::class);
    }
}
