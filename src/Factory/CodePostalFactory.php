<?php

namespace App\Factory;

use App\Entity\CodePostal;
use App\Repository\CodePostalRepository;
use Zenstruck\Foundry\RepositoryProxy;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;

/**
 * @method static CodePostal|Proxy findOrCreate(array $attributes)
 * @method static CodePostal|Proxy random()
 * @method static CodePostal[]|Proxy[] randomSet(int $number)
 * @method static CodePostal[]|Proxy[] randomRange(int $min, int $max)
 * @method static CodePostalRepository|RepositoryProxy repository()
 * @method CodePostal|Proxy create($attributes = [])
 * @method CodePostal[]|Proxy[] createMany(int $number, $attributes = [])
 */
final class CodePostalFactory extends ModelFactory
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
            // ->afterInstantiate(function(CodePostal $codePostal) {})
        ;
    }

    protected static function getClass(): string
    {
        return CodePostal::class;
    }
}
