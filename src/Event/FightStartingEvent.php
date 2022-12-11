<?php

namespace App\Event;

use App\Character\Character;

/**
 * Class FightStartingEvent
 * @package App\Event
 */
class FightStartingEvent
{

    public function __construct(public Character $player, public Character $ai)
    {

    }
}