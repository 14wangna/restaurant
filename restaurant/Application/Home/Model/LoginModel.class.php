<?php
namespace Home\Model;
use Think\Model;
class LoginModel extends Model {
    protected $_validate = array(
        array("number","require","工号不能为空"),
    );
    protected $aotu = array{
    	array("user_lastTime","get_client_time",2,"callback"),
    }
}