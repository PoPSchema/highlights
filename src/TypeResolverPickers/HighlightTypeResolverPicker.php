<?php
namespace PoP\Highlights\TypeResolverPickers;

use PoP\Highlights\Facades\HighlightTypeAPIFacade;
use PoP\Posts\TypeResolvers\PostUnionTypeResolver;
use PoP\Highlights\TypeResolvers\HighlightTypeResolver;
use PoP\ComponentModel\TypeResolverPickers\AbstractTypeResolverPicker;

class HighlightTypeResolverPicker extends AbstractTypeResolverPicker
{
    public static function getClassesToAttachTo(): array
    {
        return [
            PostUnionTypeResolver::class,
        ];
    }

    public function getTypeResolverClass(): string
    {
        return HighlightTypeResolver::class;
    }

    public function process($resultItemOrID): bool
    {
        $highlightTypeAPI = HighlightTypeAPIFacade::getInstance();
        return $highlightTypeAPI->isInstanceOfHighlightType($resultItemOrID);
    }
}
