<?php

namespace App\Builder;

use Psr\Log\LoggerInterface;

/**
 * Class CharacterBuilderFactory
 * @package App\Builder
 */
class CharacterBuilderFactory
{
    public function __construct(private LoggerInterface $logger)
    {

    }

    public function createBuilder(): CharacterBuilder
    {
        return new CharacterBuilder($this->logger);
    }
}