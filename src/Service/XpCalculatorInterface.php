<?php

namespace App\Service;

use App\Character\Character;

/**
 * Interface XpCalculatorInterface
 * @package App\Service
 */
interface XpCalculatorInterface
{
    public function addXp(Character $winner, int $enemyLevel): void;
}