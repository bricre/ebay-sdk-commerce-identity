<?php

namespace Ebay\Commerce\Identity\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The type that defines the fields for the business account information.
 */
class BusinessAccount extends AbstractModel
{
    /**
     * The container that returns the address of the business account.
     *
     * @var \Ebay\Commerce\Identity\Model\Address
     */
    public $address = null;

    /**
     * An additional name that is used for their business on eBay. The business name is
     * returned in the name field.
     *
     * @var string
     */
    public $doingBusinessAs = null;

    /**
     * The email address of the business account.
     *
     * @var string
     */
    public $email = null;

    /**
     * The business name associated with the user's eBay account.
     *
     * @var string
     */
    public $name = null;

    /**
     * The container that returns the contact details of the person who is the primary
     * contact for this account.
     *
     * @var \Ebay\Commerce\Identity\Model\Contact
     */
    public $primaryContact = null;

    /**
     * The container that returns the primary phone number for the business account.
     *
     * @var \Ebay\Commerce\Identity\Model\Phone
     */
    public $primaryPhone = null;

    /**
     * The container that returns the secondary phone number for the business account.
     *
     * @var \Ebay\Commerce\Identity\Model\Phone
     */
    public $secondaryPhone = null;

    /**
     * The business website address associated with the eBay account.
     *
     * @var string
     */
    public $website = null;
}
