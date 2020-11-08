<?php

namespace App\Factory;

use App\Entity\Commentaire;
use App\Repository\CommentaireRepository;
use Zenstruck\Foundry\RepositoryProxy;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;

/**
 * @method static Commentaire|Proxy findOrCreate(array $attributes)
 * @method static Commentaire|Proxy random()
 * @method static Commentaire[]|Proxy[] randomSet(int $number)
 * @method static Commentaire[]|Proxy[] randomRange(int $min, int $max)
 * @method static CommentaireRepository|RepositoryProxy repository()
 * @method Commentaire|Proxy create($attributes = [])
 * @method Commentaire[]|Proxy[] createMany(int $number, $attributes = [])
 */
final class CommentaireFactory extends ModelFactory
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
            // ->afterInstantiate(function(Commentaire $commentaire) {})
        ;
    }

    protected static function getClass(): string
    {
        return Commentaire::class;
    }
}
