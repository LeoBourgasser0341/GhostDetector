<?php

namespace App\Factory;

use App\Entity\Clue;
use App\Repository\ClueRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<Clue>
 *
 * @method        Clue|Proxy create(array|callable $attributes = [])
 * @method static Clue|Proxy createOne(array $attributes = [])
 * @method static Clue|Proxy find(object|array|mixed $criteria)
 * @method static Clue|Proxy findOrCreate(array $attributes)
 * @method static Clue|Proxy first(string $sortedField = 'id')
 * @method static Clue|Proxy last(string $sortedField = 'id')
 * @method static Clue|Proxy random(array $attributes = [])
 * @method static Clue|Proxy randomOrCreate(array $attributes = [])
 * @method static ClueRepository|RepositoryProxy repository()
 * @method static Clue[]|Proxy[] all()
 * @method static Clue[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Clue[]|Proxy[] createSequence(iterable|callable $sequence)
 * @method static Clue[]|Proxy[] findBy(array $attributes)
 * @method static Clue[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static Clue[]|Proxy[] randomSet(int $number, array $attributes = [])
 */
final class ClueFactory extends ModelFactory
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
            // ->afterInstantiate(function(Clue $clue): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Clue::class;
    }
}
