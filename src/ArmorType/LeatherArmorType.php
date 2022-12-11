<?php

namespace App\ArmorType;

/**
 * Class LeatherArmorType
 * @package App\ArmorType
 */
class LeatherArmorType implements ArmorType
{

    /**
     * @param int $damage
     * @return int
     */
    public function getArmorReduction(int $damage): int
    {
        return floor($damage * 0.25);
    }
}