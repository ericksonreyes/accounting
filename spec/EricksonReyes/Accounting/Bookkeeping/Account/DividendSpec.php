<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\Dividend;

/**
 * Class DividendSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class DividendSpec extends DividendTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(Dividend::class);
    }
}
