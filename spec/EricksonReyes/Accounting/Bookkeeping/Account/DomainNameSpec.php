<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\DomainName;

/**
 * Class DomainNameSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class DomainNameSpec extends AssetTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(DomainName::class);
    }
}
