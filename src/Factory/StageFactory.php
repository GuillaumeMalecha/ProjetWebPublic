<?php

namespace App\Factory;

use App\Entity\Stage;
use App\Repository\StageRepository;
use Zenstruck\Foundry\RepositoryProxy;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;

/**
 * @method static Stage|Proxy findOrCreate(array $attributes)
 * @method static Stage|Proxy random()
 * @method static Stage[]|Proxy[] randomSet(int $number)
 * @method static Stage[]|Proxy[] randomRange(int $min, int $max)
 * @method static StageRepository|RepositoryProxy repository()
 * @method Stage|Proxy create($attributes = [])
 * @method Stage[]|Proxy[] createMany(int $number, $attributes = [])
 */
final class StageFactory extends ModelFactory
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
            // ->afterInstantiate(function(Stage $stage) {})
        ;
    }

    protected static function getClass(): string
    {
        return Stage::class;
    }
}
