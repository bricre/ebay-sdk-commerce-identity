<?php

namespace Ebay\Commerce\Identity\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The type that defines the fields for the getUser method.
 */
class UserResponse extends AbstractModel
{
    /**
     * Indicates the user account type. This is determined when the user registers with
     * eBay. If they register for a business account, this value will be BUSINESS. If
     * they register for a private account, this value will be INDIVIDUAL. This
     * designation is required by the tax laws in the following countries: EBAY_AT,
     * EBAY_BE, EBAY_CH, EBAY_DE, EBAY_ES, EBAY_FR, EBAY_GB, EBAY_IE, EBAY_IT, EBAY_PL
     * Valid Values: BUSINESS or INDIVIDUAL Code so that your app gracefully handles
     * any future changes to this list. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/commerce/identity/types/api:AccountTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $accountType = null;

    /**
     * The container that returns the business account information of the user.
     *
     * @var \Ebay\Commerce\Identity\Model\BusinessAccount
     */
    public $businessAccount = null;

    /**
     * The account information of the user.
     *
     * @var \Ebay\Commerce\Identity\Model\IndividualAccount
     */
    public $individualAccount = null;

    /**
     * The eBay site on which the account is registered. For implementation help, refer
     * to <a
     * href='https://developer.ebay.com/api-docs/commerce/identity/types/bas:MarketplaceIdEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $registrationMarketplaceId = null;

    /**
     * Indicates the user's account status. Possible values: CONFIRMED, UNCONFIRMED,
     * ACCOUNTONHOLD and UNDETERMINED. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/commerce/identity/types/api:UserStatusEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $status = null;

    /**
     * The eBay immutable user ID of the user's account and can always be used to
     * identify the user.
     *
     * @var string
     */
    public $userId = null;

    /**
     * The user name, which was specific by the user when they created the account.
     * Note: This value can be changed by the user.
     *
     * @var string
     */
    public $username = null;
}
