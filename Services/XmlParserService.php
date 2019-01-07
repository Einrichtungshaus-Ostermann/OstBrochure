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

namespace OstBrochure\Services;

use OstBrochure\Struct\Brochure;
use SimpleXMLElement;
use DateTime;

class XmlParserService implements XmlParserServiceInterface
{
    /**
     * ...
     *
     * @var array
     */
    protected $configuration;

    /**
     * ...
     *
     * @param array   $configuration
     */
    public function __construct( array $configuration )
    {
        // set params
        $this->configuration = $configuration;
    }


    /**
     * ...
     *
     * @return array
     */
    public function getBrochures()
    {
        // get the file via configuration
        $file = $this->configuration['xml'];

        // read it
        $str = file_get_contents($file);

        // and parse it to xml
        $xml = new SimpleXMLElement($str);

        // every valid brochure
        $brochures = array();

        // loop them
        foreach ( $xml->Webcatalog as $webcatalog )
        {
            // set dates
            $start = new DateTime((string) $webcatalog->Start);
            $end = new DateTime((string) $webcatalog->End);
            $today = new DateTime(date("d.m.Y"));

            // valid for current date?
            if ($start <= $today && $end >= $today)
            {
                // get current variant
                $variant = $webcatalog->WebCatalogVariant;

                // set brochure
                $brochure = new Brochure();

                // set it up
                $brochure->setNumber((string) $webcatalog->WebNo);
                $brochure->setName((string) $webcatalog->WebName);
                $brochure->setHeader((string) $webcatalog->WebHeader);
                $brochure->setInfo((string) $webcatalog->WebInfo);
                $brochure->setStartDate($start);
                $brochure->setEndDate($end);
                $brochure->setCatalog($this->configuration['baseUrl'] . $variant->Path);
                $brochure->setImage($this->configuration['baseUrl'] . $variant->ImagePath);

                // add it
                array_push( $brochures, $brochure );
            }
        }

        // return them
        return $brochures;
    }
}
