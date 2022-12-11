<?php

namespace App\ArmorType;

use App\Dice;

/**
 * Class ShieldType
 * @package App\ArmorType
 */
class ShieldType implements ArmorType
{
    /**
     * @param int $damage
     * @return int
     */
    public function getArmorReduction(int $damage): int
    {
        $chanceToBlock = Dice::roll(100);

        return $chanceToBlock > 80 ? $damage : 0;
    }
}