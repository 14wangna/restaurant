<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function login(){
     	if(IS_POST){
            $adminUsersModel = M('user'); //admin_user表
            $condition = array(  //查询条件
                "number" => I("post.number"),
                "password" => I("post.password"),
            );
            $result = $adminUsersModel->where($condition)->count();
            print_r($result);
            if($result>0){  //能查到数据，说明用户名密码正确
                session("number",I("post.number"));
                $this->redirect('Index/index',0);
            }
            else{
                $this->error("用户名或密码不正确");
            }
        }
        else{
            $this->display();
        }

    }
    public function register(){
        if(IS_POST){
            $adminUsersModel = M('usernumber'); //admin_user表
                $condition = array(  //查询条件
                    "num" => I("post.number"),
                );
            $result = $adminUsersModel->where($condition)->count();
            if($result>0){  //能查到数据，说明用户名密码正确
                $usersModel = D("user"); // 实例化User对象
                $validate = array(
                    array('number','require','工号不能为空！'),
                    array('number','','工号已经存在！',0,'unique',1),
                    array('number','10','工号长度不符！',3,'length'),
                    array('repassword','password','两次输入密码不一致',0,'confirm'), // 仅仅需要进行验证码的验证
                );
                $usersModel-> setProperty("_validate",$validate);
                $result = $usersModel->create();
                if (!$result){
                    // 如果创建失败 表示验证没有通过 输出错误提示信息
                    $this->error($usersModel->getError(),U("login"));
                }else{
                    $usersModel->add();
                    // 验证通过 可以进行其他数据操作
                   // $this->success("新用户添加成功",U("lists?p=1"));
                    $this->redirect('login',0);
                }
            }
            else{
                $this->error("工号不存在");
            }
        }
        else{
            $this->display();
        }
    }
}