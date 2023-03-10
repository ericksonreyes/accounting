<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\CurrencyExchangeLoss;

/**
 * Class CurrencyExchangeLossSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class CurrencyExchangeLossSpec extends LossTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(CurrencyExchangeLoss::class);
    }
}
