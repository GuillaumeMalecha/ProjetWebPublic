<?php

namespace App\Factory;

use App\Entity\CategoriesDeServices;
use App\Repository\CategoriesDeServicesRepository;
use Zenstruck\Foundry\RepositoryProxy;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;

/**
 * @method static CategoriesDeServices|Proxy findOrCreate(array $attributes)
 * @method static CategoriesDeServices|Proxy random()
 * @method static CategoriesDeServices[]|Proxy[] randomSet(int $number)
 * @method static CategoriesDeServices[]|Proxy[] randomRange(int $min, int $max)
 * @method static CategoriesDeServicesRepository|RepositoryProxy repository()
 * @method CategoriesDeServices|Proxy create($attributes = [])
 * @method CategoriesDeServices[]|Proxy[] createMany(int $number, $attributes = [])
 */
final class CategoriesDeServicesFactory extends ModelFactory
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
            // ->afterInstantiate(function(CategoriesDeServices $categoriesDeServices) {})
        ;
    }

    protected static function getClass(): string
    {
        return CategoriesDeServices::class;
    }
}
