<?php

namespace App\Factory;

use App\Entity\Position;
use App\Repository\PositionRepository;
use Zenstruck\Foundry\RepositoryProxy;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;

/**
 * @method static Position|Proxy findOrCreate(array $attributes)
 * @method static Position|Proxy random()
 * @method static Position[]|Proxy[] randomSet(int $number)
 * @method static Position[]|Proxy[] randomRange(int $min, int $max)
 * @method static PositionRepository|RepositoryProxy repository()
 * @method Position|Proxy create($attributes = [])
 * @method Position[]|Proxy[] createMany(int $number, $attributes = [])
 */
final class PositionFactory extends ModelFactory
{
    public function __construct()
    {
        parent::__construct();

        // TODO inject services if required (https://github.com/zenstruck/foundry#factories-as-services)
    }

    protected function getDefaults(): array
    {
        return [
            // TODO add your default values here (https://github.com/zenstruck/foundry#model-factories)
        ];
    }

    protected function initialize(): self
    {
        // see https://github.com/zenstruck/foundry#initialization
        return $this
            // ->afterInstantiate(function(Position $position) {})
        ;
    }

    protected static function getClass(): string
    {
        return Position::class;
    }
}
