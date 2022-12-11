<?php

namespace App\Builder;

use App\ArmorType\ArmorType;
use App\ArmorType\IceBlockType;
use App\ArmorType\LeatherArmorType;
use App\ArmorType\ShieldType;
use App\AttackType\AttackType;
use App\AttackType\BowType;
use App\AttackType\FireBoltType;
use App\AttackType\MultiAttackType;
use App\AttackType\TwoHandedSwordType;
use App\Character\Character;
use http\Exception\RuntimeException;
use Psr\Log\LoggerInterface;

/**
 * Class CharacterBuilder
 * @package App\Builder
 */
class CharacterBuilder
{
    private int $maxHealth;
    private int $baseDamage;
    private array $attackTypes;
    private string $armorType;

    public function __construct(private LoggerInterface $logger)
    {
    }

    public function setMaxHealth(int $maxHealth): self
    {
        $this->maxHealth = $maxHealth;

        return $this;
    }

    public function setBaseDamage(int $baseDamage): self
    {
        $this->baseDamage = $baseDamage;

        return $this;
    }

    public function setAttackType(string ...$attackTypes): self
    {
        $this->attackTypes = $attackTypes;

        return $this;
    }

    public function setArmorTYpe(string $armorType): self
    {
        $this->armorType = $armorType;

        return $this;
    }

    public function buildCharacter(): Character
    {
        $this->logger->info('Creating character', [
            'maxHealth' => $this->maxHealth,
            'baseDamage' => $this->baseDamage
        ]);

        $attackTypes = array_map(
            fn(string $attackType) => $this->createAttackType($attackType),
            $this->attackTypes
        );

        $attackType = count($attackTypes) === 1 ? $attackTypes[0] : new MultiAttackType($attackTypes);

        return new Character(
            $this->maxHealth,
            $this->baseDamage,
            $attackType,
            $this->createArmorType()
        );
    }

    private function createAttackType(string $attackType): AttackType
    {
        return match ($attackType) {
            'bow' => new BowType(),
            'fire_bolt' => new FireBoltType(),
            'sword' => new TwoHandedSwordType(),
            default => throw new RuntimeException('Invalid attack type')
        };
    }

    private function createArmorType(): ArmorType
    {
        return match ($this->armorType) {
            'ice_block' => new IceBlockType(),
            'shield' => new ShieldType(),
            'leather_armor' => new LeatherArmorType(),
            default => throw new RuntimeException('Invalid armor type')
        };
    }
}