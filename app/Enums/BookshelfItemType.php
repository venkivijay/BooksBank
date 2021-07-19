<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static lend()
 * @method static static giveAway()
 */
final class BookshelfItemType extends Enum
{
    const TemporaryLend = 0;
    const GiveAway = 1;
}