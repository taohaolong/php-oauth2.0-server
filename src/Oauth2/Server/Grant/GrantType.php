<?php
/**
* @file GrantType.php
* @Function abstract class GrantType 
* @author lvqiang, lvqiang@yongche.com
* @version 0.1.0
* @date 2013-12-10
 */

namespace Oauth\Server\Grant;

abstract class GrantType {


    /**
        * @Function Construct  
        *
        * @Param $auth
        *
        * @Returns void 
     */
    public abstract function __construct(Authorization $auth);

    /**
        * @Function client authorize  
        *
        * @Param $params 
        *
        * @Returns response 
     */
    public abstract function authorize($params = null);

}
