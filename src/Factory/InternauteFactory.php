<?php

namespace App\Factory;

use App\Entity\Internaute;
use App\Repository\InternauteRepository;
use Zenstruck\Foundry\RepositoryProxy;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;

/**
 * @method static Internaute|Proxy findOrCreate(array $attributes)
 * @method static Internaute|Proxy random()
 * @method static Internaute[]|Proxy[] randomSet(int $number)
 * @method static Internaute[]|Proxy[] randomRange(int $min, int $max)
 * @method static InternauteRepository|RepositoryProxy repository()
 * @method Internaute|Proxy create($attributes = [])
 * @method Internaute[]|Proxy[] createMany(int $number, $attributes = [])
 */
final class InternauteFactory extends ModelFactory
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
            // ->afterInstantiate(function(Internaute $internaute) {})
        ;
    }

    protected static function getClass(): string
    {
        return Internaute::class;
    }
}
