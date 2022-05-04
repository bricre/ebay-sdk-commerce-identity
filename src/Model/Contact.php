<?php

namespace Ebay\Commerce\Identity\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The type that defines the fields for the information of the contact person for
 * the account.
 */
class Contact extends AbstractModel
{
    /**
     * The first name of the contact person.
     *
     * @var string
     */
    public $firstName = null;

    /**
     * The last name of the contact person.
     *
     * @var string
     */
    public $lastName = null;
}
