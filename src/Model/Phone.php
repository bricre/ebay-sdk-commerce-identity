<?php

namespace Ebay\Commerce\Identity\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The type that defines the fields for the details of a phone.
 */
class Phone extends AbstractModel
{
    /**
     * The two-letter ISO 3166 standard of the country to which the phone number
     * belongs.
     *
     * @var string
     */
    public $countryCode = null;

    /**
     * The numeric string representing the phone number.
     *
     * @var string
     */
    public $number = null;

    /**
     * The type of phone service. Valid Values: MOBILE or LAND_LINE Code so that your
     * app gracefully handles any future changes to this list.
     *
     * @var string
     */
    public $phoneType = null;
}
