<?php
namespace PoP\Highlights\TypeDataResolvers;

use PoP\Posts\TypeDataResolvers\PostTypeDataResolver;
use PoP\Highlights\TypeResolvers\HighlightTypeResolver;

class HighlightTypeDataResolver extends PostTypeDataResolver
{
    public function getDataFromIdsQuery(array $ids): array
    {
        $query = parent::getDataFromIdsQuery($ids);
        $query['post-types'] = array(POP_ADDHIGHLIGHTS_POSTTYPE_HIGHLIGHT);
        return $query;
    }
    
    /**
     * Function to override
     */
    public function getQuery($query_args): array
    {
        $query = parent::getQuery($query_args);

        $query['post-types'] = array(POP_ADDHIGHLIGHTS_POSTTYPE_HIGHLIGHT);

        return $query;
    }

    public function getTypeResolverClass(): string
    {
        return HighlightTypeResolver::class;
    }
}
