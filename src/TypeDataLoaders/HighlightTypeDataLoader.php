<?php

declare(strict_types=1);

namespace PoP\Highlights\TypeDataLoaders;

use PoP\CustomPosts\TypeDataLoaders\AbstractCustomPostTypeDataLoader;

class HighlightTypeDataLoader extends AbstractCustomPostTypeDataLoader
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
}
