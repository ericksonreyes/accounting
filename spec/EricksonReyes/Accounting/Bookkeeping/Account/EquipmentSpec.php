<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\Equipment;

/**
 * Class EquipmentSpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class EquipmentSpec extends AssetTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(Equipment::class);
    }
}
