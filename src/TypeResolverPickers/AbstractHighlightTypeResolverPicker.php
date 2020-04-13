<?php

declare(strict_types=1);

namespace PoP\Highlights\TypeResolverPickers;

use PoP\Highlights\Facades\HighlightTypeAPIFacade;
use PoP\Highlights\TypeResolvers\HighlightTypeResolver;
use PoP\ComponentModel\TypeResolverPickers\AbstractTypeResolverPicker;

class AbstractHighlightTypeResolverPicker extends AbstractTypeResolverPicker
{
    public function getTypeResolverClass(): string
    {
        return HighlightTypeResolver::class;
    }

    public function isInstanceOfType($object): bool
    {
        $highlightTypeAPI = HighlightTypeAPIFacade::getInstance();
        return $highlightTypeAPI->isInstanceOfHighlightType($object);
    }

    public function isIDOfType($resultItemID): bool
    {
        $highlightTypeAPI = HighlightTypeAPIFacade::getInstance();
        return $highlightTypeAPI->highlightExists($resultItemID);
    }
}
