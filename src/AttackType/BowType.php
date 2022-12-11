<?php

namespace App\AttackType;

use App\Dice;

/**
 * Class BowType
 * @package App\AttackType
 */
class BowType implements AttackType
{
    /**
     * @param int $baseDamage
     * @return int
     */
    public function performAttack(int $baseDamage): int
    {
        $criticalChance = Dice::roll(100);

        return $criticalChance > 70 ? $baseDamage * 3 : $baseDamage;
    }
}