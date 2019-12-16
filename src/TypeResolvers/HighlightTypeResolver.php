<?php
namespace PoP\Highlights\TypeResolvers;

use PoP\Translation\Facades\TranslationAPIFacade;
use PoP\ComponentModel\TypeResolvers\AbstractTypeResolver;
use PoP\Highlights\TypeDataLoaders\HighlightTypeDataLoader;

class HighlightTypeResolver extends AbstractTypeResolver
{
	public const NAME = 'Highlight';

    public function getTypeName(): string
    {
        return self::NAME;
    }

    public function getSchemaTypeDescription(): ?string
    {
        $translationAPI = TranslationAPIFacade::getInstance();
        return $translationAPI->__('A highlighted piece of text, extracted from a post', 'highlights');
    }

    public function getId($resultItem)
    {
        $cmspostsresolver = \PoP\Posts\ObjectPropertyResolverFactory::getInstance();
        $post = $resultItem;
        return $cmspostsresolver->getPostId($post);
    }

    public function getTypeDataLoaderClass(): string
    {
        return HighlightTypeDataLoader::class;
    }
}

