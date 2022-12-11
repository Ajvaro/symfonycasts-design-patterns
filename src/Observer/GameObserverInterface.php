<?php

namespace App\Observer;

use App\FightResult;

/**
 * Interface GameObserverInterface
 * @package App\Observer
 */
interface GameObserverInterface
{

    public function onFightFinished(FightResult $fightResult): void;
}