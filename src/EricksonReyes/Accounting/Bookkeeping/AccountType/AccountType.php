<?php

namespace EricksonReyes\Accounting\Bookkeeping\AccountType;

/**
 * Class AccountType
 * @package EricksonReyes\Accounting\Bookkeeping\Account
 */
enum AccountType
{
    case ASSET;

    case CONTRA_ASSET;

    case CONTRA_LIABILITY;

    case CONTRA_REVENUE;

    case CONTRA_EQUITY;

    case DIVIDEND;

    case EQUITY;

    case EXPENSE;

    case GAIN;

    case LIABILITY;

    case LOSS;

    case REVENUE;

    /**
     * @return string
     */
    public function label(): string
    {
        return match ($this) {
            self::ASSET => 'Asset',
            self::CONTRA_ASSET => 'Contra Asset',
            self::CONTRA_LIABILITY => 'Contra Liability',
            self::CONTRA_REVENUE => 'Contra Revenue',
            self::CONTRA_EQUITY => 'Contra Equity',
            self::DIVIDEND => 'Dividend',
            self::EQUITY => 'Equity',
            self::EXPENSE => 'Expense',
            self::GAIN => 'Gain',
            self::LIABILITY => 'Liability',
            self::LOSS => 'Loss',
            self::REVENUE => 'Revenue'
        };
    }
}
