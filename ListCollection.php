<?php declare(strict_types=1);

namespace Salient\Collection;

/**
 * An array-like list of items
 *
 * @template TValue
 *
 * @implements ListInterface<TValue>
 */
final class ListCollection implements ListInterface
{
    /** @use ListTrait<TValue> */
    use ListTrait;
}
