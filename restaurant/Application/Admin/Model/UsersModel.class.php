<?php
namespace Admin\Model;
use Think\Model;
class UsersModel extends Model {
    protected $_validate = array(
        array("username","require","用户名不能为空"),
        array("truename","require","真实姓名不能为空"),
        array("phonenum","require","手机号不能为空"),
        array("email","require","电子邮箱不能为空"),
        array("time","require","添加时间不能为空"),
        array("email","require","电子邮箱不能为空"),
        array("password","require","密码不能为空"),
    );
    protected $aotu = array{
    	array("user_lastTime","get_client_time",2,"callback"),
    }
}