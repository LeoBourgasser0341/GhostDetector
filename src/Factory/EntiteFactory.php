<?php

namespace App\Factory;

use App\Entity\Entite;
use App\Repository\EntiteRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<Entite>
 *
 * @method        Entite|Proxy create(array|callable $attributes = [])
 * @method static Entite|Proxy createOne(array $attributes = [])
 * @method static Entite|Proxy find(object|array|mixed $criteria)
 * @method static Entite|Proxy findOrCreate(array $attributes)
 * @method static Entite|Proxy first(string $sortedField = 'id')
 * @method static Entite|Proxy last(string $sortedField = 'id')
 * @method static Entite|Proxy random(array $attributes = [])
 * @method static Entite|Proxy randomOrCreate(array $attributes = [])
 * @method static EntiteRepository|RepositoryProxy repository()
 * @method static Entite[]|Proxy[] all()
 * @method static Entite[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Entite[]|Proxy[] createSequence(iterable|callable $sequence)
 * @method static Entite[]|Proxy[] findBy(array $attributes)
 * @method static Entite[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static Entite[]|Proxy[] randomSet(int $number, array $attributes = [])
 */
final class EntiteFactory extends ModelFactory
{
    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services
     *
     * @todo inject services if required
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories
     *
     * @todo add your default values here
     */
    protected function getDefaults(): array
    {
        return [
            'name' => self::faker()->text(50),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(Entite $entite): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Entite::class;
    }
}
