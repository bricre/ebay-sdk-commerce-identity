<?php

namespace Ebay\Commerce\Identity\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The type that defines the fields for the information of an individual account.
 */
class IndividualAccount extends AbstractModel
{
    /**
     * The eBay user's registration email address.
     *
     * @var string
     */
    public $email = null;

    /**
     * The eBay user's first name.
     *
     * @var string
     */
    public $firstName = null;

    /**
     * The eBay user's last name.
     *
     * @var string
     */
    public $lastName = null;

    /**
     * The container that returns the eBay user's primary phone number information.
     *
     * @var \Ebay\Commerce\Identity\Model\Phone
     */
    public $primaryPhone = null;

    /**
     * The container that returns the eBay user's address information.
     *
     * @var \Ebay\Commerce\Identity\Model\Address
     */
    public $registrationAddress = null;

    /**
     * The container that returns the eBay user's secondary phone number information.
     *
     * @var \Ebay\Commerce\Identity\Model\Phone
     */
    public $secondaryPhone = null;
}
