<?php

declare(strict_types=1);

namespace PoP\Highlights;

class Environment
{
    public static function addHighlightTypeToCustomPostUnionTypes(): bool
    {
        return isset($_ENV['ADD_HIGHLIGHT_TYPE_TO_CONTENTENTITY_UNION_TYPES']) ? strtolower($_ENV['ADD_HIGHLIGHT_TYPE_TO_CONTENTENTITY_UNION_TYPES']) == "true" : false;
    }
}
