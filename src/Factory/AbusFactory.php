<?php

namespace App\Factory;

use App\Entity\Abus;
use App\Repository\AbusRepository;
use Zenstruck\Foundry\RepositoryProxy;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;

/**
 * @method static Abus|Proxy findOrCreate(array $attributes)
 * @method static Abus|Proxy random()
 * @method static Abus[]|Proxy[] randomSet(int $number)
 * @method static Abus[]|Proxy[] randomRange(int $min, int $max)
 * @method static AbusRepository|RepositoryProxy repository()
 * @method Abus|Proxy create($attributes = [])
 * @method Abus[]|Proxy[] createMany(int $number, $attributes = [])
 */
final class AbusFactory extends ModelFactory
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
            // ->afterInstantiate(function(Abus $abus) {})
        ;
    }

    protected static function getClass(): string
    {
        return Abus::class;
    }
}
