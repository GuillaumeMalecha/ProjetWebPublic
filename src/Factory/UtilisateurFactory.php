<?php

namespace App\Factory;

use App\Entity\Utilisateur;
use App\Repository\UtilisateurRepository;
use Zenstruck\Foundry\RepositoryProxy;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;

/**
 * @method static Utilisateur|Proxy findOrCreate(array $attributes)
 * @method static Utilisateur|Proxy random()
 * @method static Utilisateur[]|Proxy[] randomSet(int $number)
 * @method static Utilisateur[]|Proxy[] randomRange(int $min, int $max)
 * @method static UtilisateurRepository|RepositoryProxy repository()
 * @method Utilisateur|Proxy create($attributes = [])
 * @method Utilisateur[]|Proxy[] createMany(int $number, $attributes = [])
 */
final class UtilisateurFactory extends ModelFactory
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
            // ->afterInstantiate(function(Utilisateur $utilisateur) {})
        ;
    }

    protected static function getClass(): string
    {
        return Utilisateur::class;
    }
}
