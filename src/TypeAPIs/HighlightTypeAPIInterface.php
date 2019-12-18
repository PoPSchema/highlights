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
    /**
     * Get the highlight with provided ID or, if it doesn't exist, null
     *
     * @param [type] $id
     * @return void
     */
    public function getHighlight($id);
    /**
     * Indicate if an highlight with provided ID exists
     *
     * @param [type] $id
     * @return void
     */
    public function highlightExists($id): bool;
}
