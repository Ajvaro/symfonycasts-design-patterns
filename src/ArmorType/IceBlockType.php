<?php

namespace App\ArmorType;

use App\Dice;

/**
 * Class IceBlockType
 * @package App\ArmorType
 */
class IceBlockType implements ArmorType
{
    /**
     * @param int $damage
     * @return int
     */
    public function getArmorReduction(int $damage): int
    {
       return Dice::roll(8) + Dice::roll(8);
    }
}