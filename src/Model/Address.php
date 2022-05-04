<?php

namespace Ebay\Commerce\Identity\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The type that defines the fields for an address.
 */
class Address extends AbstractModel
{
    /**
     * The first line of the street address.
     *
     * @var string
     */
    public $addressLine1 = null;

    /**
     * The second line of the street address. This field is not always used, but can be
     * used for 'Suite Number' or 'Apt Number'.
     *
     * @var string
     */
    public $addressLine2 = null;

    /**
     * The city of the address.
     *
     * @var string
     */
    public $city = null;

    /**
     * The two-letter ISO 3166 standard of the country of the address. For
     * implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/commerce/identity/types/bas:CountryCodeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $country = null;

    /**
     * The county of the address.
     *
     * @var string
     */
    public $county = null;

    /**
     * The postal code of the address.
     *
     * @var string
     */
    public $postalCode = null;

    /**
     * The state or province of the address.
     *
     * @var string
     */
    public $stateOrProvince = null;
}
