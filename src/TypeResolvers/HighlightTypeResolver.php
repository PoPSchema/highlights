<?php
namespace PoP\Highlights\TypeResolvers;

use PoP\Posts\TypeResolvers\PostTypeResolver;
use PoP\Highlights\TypeDataResolvers\HighlightTypeDataResolver;

class HighlightTypeResolver extends PostTypeResolver
{
    public function getTypeDataResolverClass(): string
    {
        return HighlightTypeDataResolver::class;
    }
}

