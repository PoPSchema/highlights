<?php
namespace PoP\Highlights\TypeResolvers;

use PoP\Posts\TypeResolvers\PostTypeResolver;
use PoP\Highlights\TypeDataLoaders\HighlightTypeDataLoader;

class HighlightTypeResolver extends PostTypeResolver
{
    public function getTypeDataLoaderClass(): string
    {
        return HighlightTypeDataLoader::class;
    }
}

