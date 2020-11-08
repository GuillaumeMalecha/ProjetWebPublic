<?php

namespace App\Factory;

use App\Entity\Localite;
use App\Repository\LocaliteRepository;
use Zenstruck\Foundry\RepositoryProxy;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;

/**
 * @method static Localite|Proxy findOrCreate(array $attributes)
 * @method static Localite|Proxy random()
 * @method static Localite[]|Proxy[] randomSet(int $number)
 * @method static Localite[]|Proxy[] randomRange(int $min, int $max)
 * @method static LocaliteRepository|RepositoryProxy repository()
 * @method Localite|Proxy create($attributes = [])
 * @method Localite[]|Proxy[] createMany(int $number, $attributes = [])
 */
final class LocaliteFactory extends ModelFactory
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
            // ->afterInstantiate(function(Localite $localite) {})
        ;
    }

    protected static function getClass(): string
    {
        return Localite::class;
    }
}
