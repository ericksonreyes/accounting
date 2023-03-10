<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\AccumulatedDepreciation;

/**
 * Class AccumulatedDepreciationSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class AccumulatedDepreciationSpec extends ContraAssetTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(AccumulatedDepreciation::class);
    }
}
