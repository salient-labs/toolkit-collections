<?php declare(strict_types=1);

namespace Salient\Collection;

use Salient\Contract\Collection\CollectionInterface;
use Salient\Contract\Core\Arrayable;
use Salient\Contract\Core\Immutable;

/**
 * An immutable array-like collection of items
 *
 * @template TKey of array-key
 * @template TValue
 *
 * @implements CollectionInterface<TKey,TValue>
 * @implements Arrayable<TKey,TValue>
 */
final class ImmutableCollection implements CollectionInterface, Arrayable, Immutable
{
    /** @use ImmutableCollectionTrait<TKey,TValue> */
    use ImmutableCollectionTrait;
}
