<?php

namespace spec\EricksonReyes\Accounting\Bookkeeping\Account;

use EricksonReyes\Accounting\Bookkeeping\Account\Inventory;

/**
 * Class InventorySpec
 * @package spec\EricksonReyes\Accounting\Bookkeeping\Account
 */
class InventorySpec extends AssetTest
{
    /**
     * @return void
     */
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(Inventory::class);
    }
}
