<?php

namespace Oauth2\Server\Grant;

class AuthorizationCode extends GrantType {


    private $_identifier   = 'authorization_code';

    private $_responseType = 'code'; 

    private $_auth = null;

    public function __construct(Authorization $auth) {
        $this->_auth = $auth;
    } 

    public function auth($params) {
        if(empty($params['client_id'])) {
            throw new Exception\ClientException(sprintf($this->authServer->getExceptionMessage('invalid_request'), 'client_id'), 0);
        }
    }
}
