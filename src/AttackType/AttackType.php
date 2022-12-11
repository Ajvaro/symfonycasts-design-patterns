<?php

namespace App\AttackType;

/**
 * Interface AttackType
 * @package App\AttackType
 */
interface AttackType
{

    public function performAttack(int $baseDamage): int;
}