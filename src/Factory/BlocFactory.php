<?php

namespace App\Factory;

use App\Entity\Bloc;
use App\Repository\BlocRepository;
use Zenstruck\Foundry\RepositoryProxy;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;

/**
 * @method static Bloc|Proxy findOrCreate(array $attributes)
 * @method static Bloc|Proxy random()
 * @method static Bloc[]|Proxy[] randomSet(int $number)
 * @method static Bloc[]|Proxy[] randomRange(int $min, int $max)
 * @method static BlocRepository|RepositoryProxy repository()
 * @method Bloc|Proxy create($attributes = [])
 * @method Bloc[]|Proxy[] createMany(int $number, $attributes = [])
 */
final class BlocFactory extends ModelFactory
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
            // ->afterInstantiate(function(Bloc $bloc) {})
        ;
    }

    protected static function getClass(): string
    {
        return Bloc::class;
    }
}
