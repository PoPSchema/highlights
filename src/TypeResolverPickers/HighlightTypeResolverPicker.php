<?php
namespace PoP\Highlights\TypeResolverPickers;

use PoP\ComponentModel\TypeResolverPickers\AbstractTypeResolverPicker;
use PoP\Posts\TypeResolvers\PostConvertibleTypeResolver;
use PoP\Highlights\TypeResolvers\HighlightTypeResolver;

class HighlightTypeResolverPicker extends AbstractTypeResolverPicker
{
    public static function getClassesToAttachTo(): array
    {
        return [
            PostConvertibleTypeResolver::class,
        ];
    }

    public function getSchemaDefinitionObjectNature(): string
    {
        return 'is-highlight';
    }

    public function getTypeResolverClass(): string
    {
        return HighlightTypeResolver::class;
    }

    public function process($resultItemOrID): bool
    {
        $cmspostsapi = \PoP\Posts\FunctionAPIFactory::getInstance();
        $cmspostsresolver = \PoP\Posts\ObjectPropertyResolverFactory::getInstance();
        $postID = is_object($resultItemOrID) ? $cmspostsresolver->getPostId($resultItemOrID) : $resultItemOrID;
        return $cmspostsapi->getPostType($postID) == POP_ADDHIGHLIGHTS_POSTTYPE_HIGHLIGHT;
    }
}
