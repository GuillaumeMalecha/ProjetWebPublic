<?php

namespace App\Factory;

use App\Entity\Newsletter;
use App\Repository\NewsletterRepository;
use Zenstruck\Foundry\RepositoryProxy;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;

/**
 * @method static Newsletter|Proxy findOrCreate(array $attributes)
 * @method static Newsletter|Proxy random()
 * @method static Newsletter[]|Proxy[] randomSet(int $number)
 * @method static Newsletter[]|Proxy[] randomRange(int $min, int $max)
 * @method static NewsletterRepository|RepositoryProxy repository()
 * @method Newsletter|Proxy create($attributes = [])
 * @method Newsletter[]|Proxy[] createMany(int $number, $attributes = [])
 */
final class NewsletterFactory extends ModelFactory
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
            // ->afterInstantiate(function(Newsletter $newsletter) {})
        ;
    }

    protected static function getClass(): string
    {
        return Newsletter::class;
    }
}
