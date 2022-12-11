<?php

namespace App\ArmorType;

/**
 * Interface ArmorType
 * @package App\ArmorType
 */
interface ArmorType
{
    /**
     * @param int $damage
     * @return int
     */
    public function getArmorReduction(int $damage): int;
}