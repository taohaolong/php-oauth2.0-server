<?php

/**
* @file Common.php
* @Function Exception Common Definition 
* @author lvqiang, lvqiang@yongche.com
* @version 0.1
* @date 2013-12-10
 */

namespace Oauth2\Server\Exception;

class CommonException {

    const INVALID_REQUEST            = "invalid_request";
    const INVALID_CLIENT             = "invalid_client";
    const INVALID_SCOPE              = "invalid_scope";
    const INVALID_GRANT              = "invalid_grant";
    const UNSUPPORTED_GRANT_TYPE     = "unsupported_grant_type";
    const UNSUPPORTED_RESPONSE_TYPE  = "unsupported_response_type";
    const UNAUTHORIZED_CLIENT        = "unauthorized_client";
    const ACCESS_DENIED              = "access_denied";
    const SERVER_ERROR               = "server_error";
    const TEMPORAILY_UNAVAILABLE     = "temporarily_unavailable";

    public static function errorCode() {
        return array(
            10001 => self::INVALID_REQUEST, 
            10002 => self::INVALID_CLIENT,
            10003 => self::INVALID_SCOPE,
            10004 => self::INVALID_GRANT,
            10005 => self::UNSUPPORTED_GRANT_TYPE,
            10006 => self::UNSUPPORTED_RESPONSE_TYPE,
            10007 => self::UNAUTHORIZED_CLIENT,
            10008 => self::ACCESS_DENIED,
            10009 => self::SERVER_ERROR,
            10010 => self::TEMPORAILY_UNAVAILABLE
        );
    }

    public static function errorDescription() {
        return array(
            self::INVALID_REQUEST           => "The request is missing a required parameter, includes an invalid parameter value, includes a parameter more than once, or is otherwise malformed.",
            self::INVALID_CLIENT            => "Client authentication failed",
            self::INVALID_SCOPE             => "The requested scope is invalid, unknown, or malformed.",
            self::INVALID_GRANT             => 'The provided authorization grant is invalid, expired, revoked, does not match the redirection URI used in the authorization request, or was issued to another client. Check the "%s" parameter.',
            self::UNSUPPORTED_GRANT_TYPE    => 'The authorization grant type "%s" is not supported by the authorization server',
            self::UNSUPPORTED_RESPONSE_TYPE => 'The authorization server does not support obtaining an authorization code using this method.',
            self::UNAUTHORIZED_CLIENT       => 'The client is not authorized to request an access token using this method.',
            self::ACCESS_DENIED             => 'The resource owner or authorization server denied the request.',
            self::SERVER_ERROR              => 'The authorization server encountered an unexpected condition which prevented it from fulfilling the request.',
            self::TEMPORAILY_UNAVAILABLE    => 'The authorization server is currently unable to handle the request due to a temporary overloading or maintenance of the server.'
        );
    }

    public static function errorHttpStatusCode() {
        return array(
            self::INVALID_REQUEST           => 400,
            self::INVALID_CLIENT            => 400,
            self::INVALID_SCOPE             => 400,
            self::INVALID_GRANT             => 400,
            self::UNSUPPORTED_GRANT_TYPE    => 400,
            self::UNSUPPORTED_RESPONSE_TYPE => 400,
            self::UNAUTHORIZED_CLIENT       => 401,
            self::ACCESS_DENIED             => 401,
            self::SERVER_ERROR              => 500,
            self::TEMPORAILY_UNAVAILABLE    => 503
        );
    }
}
