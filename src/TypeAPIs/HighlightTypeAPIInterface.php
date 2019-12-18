<?php
namespace PoP\Highlights\TypeAPIs;

/**
 * Methods to interact with the Type, to be implemented by the underlying CMS
 */
interface HighlightTypeAPIInterface
{
    /**
     * Indicates if the passed object is of type Highlight
     *
     * @param [type] $object
     * @return boolean
     */
    public function isInstanceOfHighlightType($object): bool;
}
