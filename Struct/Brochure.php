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

namespace OstBrochure\Struct;

use DateTime;

class Brochure extends Struct
{
    /**
     * ...
     *
     * @var string
     */
    protected $number;

    /**
     * ...
     *
     * @var string
     */
    protected $name;

    /**
     * ...
     *
     * @var string
     */
    protected $header;

    /**
     * ...
     *
     * @var string
     */
    protected $info;

    /**
     * ...
     *
     * @var DateTime
     */
    protected $startDate;

    /**
     * ...
     *
     * @var DateTime
     */
    protected $endDate;

    /**
     * The complete url to the catalog.
     *
     * @var string
     */
    protected $catalog;

    /**
     * The complete url to the image.
     *
     * @var string
     */
    protected $image;

    /**
     * Getter method for the property.
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Setter method for the property.
     *
     * @param string $number
     */
    public function setNumber(string $number)
    {
        $this->number = $number;
    }

    /**
     * Getter method for the property.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Setter method for the property.
     *
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * Getter method for the property.
     *
     * @return string
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Setter method for the property.
     *
     * @param string $header
     */
    public function setHeader(string $header)
    {
        $this->header = $header;
    }

    /**
     * Getter method for the property.
     *
     * @return string
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Setter method for the property.
     *
     * @param string $info
     */
    public function setInfo(string $info)
    {
        $this->info = $info;
    }

    /**
     * Getter method for the property.
     *
     * @return DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Setter method for the property.
     *
     * @param DateTime $startDate
     */
    public function setStartDate(DateTime $startDate)
    {
        $this->startDate = $startDate;
    }

    /**
     * Getter method for the property.
     *
     * @return DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Setter method for the property.
     *
     * @param DateTime $endDate
     */
    public function setEndDate(DateTime $endDate)
    {
        $this->endDate = $endDate;
    }

    /**
     * Getter method for the property.
     *
     * @return string
     */
    public function getCatalog()
    {
        return $this->catalog;
    }

    /**
     * Setter method for the property.
     *
     * @param string $catalog
     */
    public function setCatalog(string $catalog)
    {
        $this->catalog = $catalog;
    }

    /**
     * Getter method for the property.
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Setter method for the property.
     *
     * @param string $image
     */
    public function setImage(string $image)
    {
        $this->image = $image;
    }
}
