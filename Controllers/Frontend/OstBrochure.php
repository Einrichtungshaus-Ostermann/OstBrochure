<?php declare(strict_types=1);

/**
 * Einrichtungshaus Ostermann GmbH & Co. KG - Brochure
 *
 * @package   OstBrochure
 *
 * @author    Eike Brandt-Warneke <e.brandt-warneke@ostermann.de>
 * @copyright 2018 Einrichtungshaus Ostermann GmbH & Co. KG
 * @license   proprietary
 */

use OstBrochure\Services\XmlParserServiceInterface;

class Shopware_Controllers_Frontend_OstBrochure extends Enlight_Controller_Action
{
    /**
     * ...
     *
     * @return array
     */
    public function getWhitelistedCSRFActions()
    {
        // return all actions
        return array_values(array_filter(
            array_map(
                function ($method) { return (substr($method, -6) === 'Action') ? substr($method, 0, -6) : null; },
                get_class_methods($this)
            ),
            function ($method) { return  !in_array((string) $method, ['', 'index', 'load', 'extends'], true); }
        ));
    }

    /**
     * ...
     *
     * @throws Exception
     */
    public function preDispatch()
    {
        // ...
        $viewDir = $this->container->getParameter('ost_brochure.view_dir');
        $this->get('template')->addTemplateDir($viewDir);
        parent::preDispatch();
    }

    /**
     * ...
     *
     * @throws Exception
     */
    public function indexAction()
    {
        /* @var $xmlParser XmlParserServiceInterface */
        $xmlParser = $this->get( "ost_brochure.xml_parser_service" );

        // get them
        $brochures = $xmlParser->getBrochures();

        // assign to template
        $this->get( "template" )->assign( "ostBrochures", $brochures );
    }
}
