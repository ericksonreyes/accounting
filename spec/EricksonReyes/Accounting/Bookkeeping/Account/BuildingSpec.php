<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\Building;

/**
 * Class BuildingSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class BuildingSpec extends AssetTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(Building::class);
    }
}
