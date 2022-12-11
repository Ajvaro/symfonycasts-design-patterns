<?php

namespace App\AttackType;

use App\Dice;

/**
 * Class TwoHandedSwordType
 * @package App\AttackType
 */
class TwoHandedSwordType implements AttackType
{

    /**
     * @param int $baseDamage
     * @return int
     */
    public function performAttack(int $baseDamage): int
    {
        $twoHandSwordDamage = Dice::roll(12) + Dice::roll(12);

        return $baseDamage + $twoHandSwordDamage;
    }
}