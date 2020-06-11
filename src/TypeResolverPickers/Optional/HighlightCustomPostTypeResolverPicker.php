<?php

declare(strict_types=1);

namespace PoP\Highlights\TypeResolverPickers\Optional;

use PoP\Content\TypeResolvers\CustomPostUnionTypeResolver;
use PoP\Highlights\TypeResolverPickers\AbstractHighlightTypeResolverPicker;

class HighlightCustomPostTypeResolverPicker extends AbstractHighlightTypeResolverPicker
{
    public static function getClassesToAttachTo(): array
    {
        return [
            CustomPostUnionTypeResolver::class,
        ];
    }
}
