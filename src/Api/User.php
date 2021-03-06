<?php

namespace Ebay\Commerce\Identity\Api;

use Ebay\Commerce\Identity\Model\UserResponse;
use OpenAPI\Runtime\UnexpectedResponse;

class User extends AbstractAPI
{
    /**
     * This method retrieves the account profile information for an authenticated user,
     * which requires a User access token. What is returned is controlled by the
     * scopes. For a business account you use the default scope
     * commerce.identity.readonly, which returns all the fields in the businessAccount
     * container. These are returned because this is all public information. For an
     * individual account, the fields returned in the individualAccount container are
     * based on the scope you use. Using the default scope, only public information,
     * such as eBay user ID, are returned. For details about what each scope returns,
     * see the Identity API Overview. URLs for this method Production URL:
     * https://apiz.ebay.com/commerce/identity/v1/user/ Sandbox URL:
     * https://apiz.sandbox.ebay.com/commerce/identity/v1/user/ In the Sandbox, this
     * method returns mock data. Note: You must use the correct scope or scopes for the
     * data you want returned.
     *
     * @return UserResponse|UnexpectedResponse
     */
    public function get()
    {
        return $this->request(
        'getUser',
        'GET',
        'user/',
        null,
        [],
        []
        );
    }
}
