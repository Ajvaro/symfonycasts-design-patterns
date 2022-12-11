<?php

namespace App\Event;

use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\ConsoleOutput;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Class OutputFightStartingSubscriber
 * @package App\Event
 */
class OutputFightStartingSubscriber implements EventSubscriberInterface
{

    public static function getSubscribedEvents(): array
    {
        return [
            FightStartingEvent::class => 'onFightStart'
        ];
    }

    public function onFightStart(FightStartingEvent $event)
    {
        $io = new SymfonyStyle(new ArrayInput([]), new ConsoleOutput());

        $io->note('Fight is starting against' . $event->ai->getNickname());
    }
}