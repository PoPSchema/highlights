<?php

declare(strict_types=1);

namespace PoP\Highlights\TypeResolverPickers\Optional;

use PoP\Content\TypeResolvers\ContentEntityUnionTypeResolver;
use PoP\Highlights\TypeResolverPickers\AbstractHighlightTypeResolverPicker;

class HighlightContentEntityTypeResolverPicker extends AbstractHighlightTypeResolverPicker
{
    public static function getClassesToAttachTo(): array
    {
        return [
            ContentEntityUnionTypeResolver::class,
        ];
    }
}
