<?php

namespace App\Factory;

use App\Entity\Commune;
use App\Repository\CommuneRepository;
use Zenstruck\Foundry\RepositoryProxy;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;

/**
 * @method static Commune|Proxy findOrCreate(array $attributes)
 * @method static Commune|Proxy random()
 * @method static Commune[]|Proxy[] randomSet(int $number)
 * @method static Commune[]|Proxy[] randomRange(int $min, int $max)
 * @method static CommuneRepository|RepositoryProxy repository()
 * @method Commune|Proxy create($attributes = [])
 * @method Commune[]|Proxy[] createMany(int $number, $attributes = [])
 */
final class CommuneFactory extends ModelFactory
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
            // ->afterInstantiate(function(Commune $commune) {})
        ;
    }

    protected static function getClass(): string
    {
        return Commune::class;
    }
}
