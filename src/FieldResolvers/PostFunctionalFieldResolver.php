<?php
namespace PoP\Highlights\FieldResolvers;

use PoP\ComponentModel\Utils;
use PoP\Translation\Facades\TranslationAPIFacade;
use PoP\ComponentModel\Schema\SchemaDefinition;
use PoP\ComponentModel\FieldResolvers\AbstractFunctionalFieldResolver;
use PoP\ComponentModel\TypeResolvers\TypeResolverInterface;
use PoP\ComponentModel\Facades\ModuleProcessors\ModuleProcessorManagerFacade;
use PoP\ComponentModel\GeneralUtils;
use PoP\Engine\Route\RouteUtils;
use PoP\Posts\TypeResolvers\PostTypeResolver;

class PostFunctionalFieldResolver extends AbstractFunctionalFieldResolver
{
    public static function getClassesToAttachTo(): array
    {
        return array(
            PostTypeResolver::class,
        );
    }

    public static function getFieldNamesToResolve(): array
    {
        return [
			'addhighlight-url',
        ];
    }

    public function getSchemaFieldType(TypeResolverInterface $typeResolver, string $fieldName): ?string
    {
        $types = [
			'addhighlight-url' => SchemaDefinition::TYPE_URL,
        ];
        return $types[$fieldName] ?? parent::getSchemaFieldType($typeResolver, $fieldName);
    }

    public function getSchemaFieldDescription(TypeResolverInterface $typeResolver, string $fieldName): ?string
    {
        $translationAPI = TranslationAPIFacade::getInstance();
        $descriptions = [
			'addhighlight-url' => $translationAPI->__('', ''),
        ];
        return $descriptions[$fieldName] ?? parent::getSchemaFieldDescription($typeResolver, $fieldName);
    }

    public function resolveValue(TypeResolverInterface $typeResolver, $resultItem, string $fieldName, array $fieldArgs = [], ?array $variables = null, ?array $expressions = null, array $options = [])
    {
        $post = $resultItem;
        $cmsengineapi = \PoP\Engine\FunctionAPIFactory::getInstance();
        switch ($fieldName) {
            case 'addhighlight-url':
                $routes = array(
                    'addhighlight-url' => POP_ADDHIGHLIGHTS_ROUTE_ADDHIGHLIGHT,
                );
                $route = $routes[$fieldName];

                // $moduleprocessor_manager = ModuleProcessorManagerFacade::getInstance();
                // $input = [PoP_AddHighlights_Module_Processor_PostTriggerLayoutFormComponentValues::class, PoP_AddHighlights_Module_Processor_PostTriggerLayoutFormComponentValues::MODULE_FORMCOMPONENT_CARD_HIGHLIGHTEDPOST];
                // $input_name = $moduleprocessor_manager->getProcessor($input)->getName($input);
                $input_name = POP_INPUTNAME_HIGHLIGHTEDPOST;
                return GeneralUtils::addQueryArgs([
                    $input_name => $typeResolver->getID($post),
                ], RouteUtils::getRouteURL($route));
        }

        return parent::resolveValue($typeResolver, $resultItem, $fieldName, $fieldArgs, $variables, $expressions, $options);
    }
}
