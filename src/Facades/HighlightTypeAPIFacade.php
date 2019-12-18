<?php
namespace PoP\Highlights\Facades;

use PoP\Highlights\TypeAPIs\HighlightTypeAPIInterface;
use PoP\Root\Container\ContainerBuilderFactory;

class HighlightTypeAPIFacade
{
    public static function getInstance(): HighlightTypeAPIInterface
    {
        return ContainerBuilderFactory::getInstance()->get('highlight_type_api');
    }
}
