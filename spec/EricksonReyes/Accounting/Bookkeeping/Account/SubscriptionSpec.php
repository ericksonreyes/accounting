<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\Subscription;

/**
 * Class SubscriptionSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class SubscriptionSpec extends ExpenseTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(Subscription::class);
    }
}
