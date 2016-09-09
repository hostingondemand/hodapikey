<?php
namespace modules\hodapikey\model\data;

use lib\model\BaseModel;

class User extends BaseModel
{
    var $username;
    var $password;
    var $hash;
    var $userGroup;
    var $user;

    function newHash(){
        $this->hash= md5($this->username.time()).md5(microtime().rand(0,100000));
    }

}

?>
