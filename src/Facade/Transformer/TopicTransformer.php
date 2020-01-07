<?php

declare(strict_types=1);

namespace MDClub\Facade\Transformer;

use MDClub\Initializer\Facade;
use MDClub\Transformer\Topic;

/**
 * TopicTransformer Facade
 *
 * @method static array transform(array $items, array $knownRelationship = [])
 * @method static array getInRelationship(array $targetIds, string $targetType)
 */
class TopicTransformer extends Facade
{
    /**
     * @inheritDoc
     */
    protected static function getFacadeAccessor(): string
    {
        return Topic::class;
    }
}