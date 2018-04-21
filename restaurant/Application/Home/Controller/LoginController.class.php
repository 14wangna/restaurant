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
            if($result>0){  //能查到数据，说明用户名密码正确
                session("number",I("post.number"));

                // $number=$_SESSION['number'];
                

                // $userModel=M('user');
                // $conditiona['number']=$number;
                // $data=$userModel->where($conditiona)->select();
                // // print_r($data);
                // $this->assign('user',$data);
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
}
