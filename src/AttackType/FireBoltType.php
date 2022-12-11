<?php

namespace App\AttackType;

use App\Dice;

/**
 * Class FireBoltType
 * @package App\AttackType
 */
class FireBoltType implements AttackType
{

    /**
     * @param int $baseDamage
     * @return int
     */
    public function performAttack(int $baseDamage): int
    {
        return Dice::roll(10) + Dice::roll(10) + Dice::roll(10);
    }
}