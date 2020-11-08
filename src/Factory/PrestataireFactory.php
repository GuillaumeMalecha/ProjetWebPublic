<?php

namespace App\Factory;

use App\Entity\Prestataire;
use App\Repository\PrestataireRepository;
use Zenstruck\Foundry\RepositoryProxy;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;

/**
 * @method static Prestataire|Proxy findOrCreate(array $attributes)
 * @method static Prestataire|Proxy random()
 * @method static Prestataire[]|Proxy[] randomSet(int $number)
 * @method static Prestataire[]|Proxy[] randomRange(int $min, int $max)
 * @method static PrestataireRepository|RepositoryProxy repository()
 * @method Prestataire|Proxy create($attributes = [])
 * @method Prestataire[]|Proxy[] createMany(int $number, $attributes = [])
 */
final class PrestataireFactory extends ModelFactory
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
            // ->afterInstantiate(function(Prestataire $prestataire) {})
        ;
    }

    protected static function getClass(): string
    {
        return Prestataire::class;
    }
}
