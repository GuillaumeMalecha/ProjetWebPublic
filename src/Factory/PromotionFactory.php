<?php

namespace App\Factory;

use App\Entity\Promotion;
use App\Repository\PromotionRepository;
use Zenstruck\Foundry\RepositoryProxy;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;

/**
 * @method static Promotion|Proxy findOrCreate(array $attributes)
 * @method static Promotion|Proxy random()
 * @method static Promotion[]|Proxy[] randomSet(int $number)
 * @method static Promotion[]|Proxy[] randomRange(int $min, int $max)
 * @method static PromotionRepository|RepositoryProxy repository()
 * @method Promotion|Proxy create($attributes = [])
 * @method Promotion[]|Proxy[] createMany(int $number, $attributes = [])
 */
final class PromotionFactory extends ModelFactory
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
            // ->afterInstantiate(function(Promotion $promotion) {})
        ;
    }

    protected static function getClass(): string
    {
        return Promotion::class;
    }
}
