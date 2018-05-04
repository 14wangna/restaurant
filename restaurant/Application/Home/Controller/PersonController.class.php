<?php
namespace Home\Controller;
use Think\Controller;
class PersonController extends Controller {
	public function __construct(){
        parent::__construct();
        if(!isLogin()){
           $this->error("请先登录",U("Login/login"));
           //  $this->redirect('Admin/login',0);
        }
    }
    public function person(){
        $number=$_SESSION['number'];
        $userModel=M('user');
        $condition['number']=$number;
        $data=$userModel->where($condition)->find();
        // print_r($data);
         $this->assign('user',$data);

    	  $this->display();
    }

    public function edit() {

            $id=I('id'); 
            $newModel = M('user');
            $data =$newModel ->find($id);
            $this->assign('user',$data);

            $this->display();
        }


    public function doEdit(){
            $upload = new \Think\Upload();
            $upload->maxSize   =     3145728 ;
            $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');
            $upload->rootPath  =     THINK_PATH; 
            $upload->savePath  =     '../Public/uploads/'; 
             
            $info   =   $upload->upload();
            if(!$info) {
                $this->error($upload->getError());
            }else{
               $usersModel = M('user');
                $data =$usersModel ->create();
                $data['thumb']=$info['thumb']['savepath'].$info['thumb']['savename'];
                if($usersModel->save($data)){
                    $this->redirect('Person/person');
                }else{
                    $this->error();

                    }
                }
    }
     public function pass() {
        $condition['number'] = I("session.number");
        $user = M("user")->where($condition)->find();
        $this->assign("users", $user);
        $this->display();
    }

    public function doPwd() {
        
            $usersModel = M('user'); //admin_user表
            $condition = array(  //查询条件
                "password" => I("post.password")
            );
            $result = $usersModel->where($condition)->count();
            if($result>0){  //能查到数据，说明用户名密码正确
                $this->error("旧密码不正确",U("pass"));
            }

            $usersModel = D("user");

             $validate = array(
                array('repassword','password','两次输入密码不一致',0,'confirm'), // 仅仅需要进行验证码的验证
            );
            $usersModel-> setProperty("_validate",$validate);
            $result = $usersModel->create();
            if (!$result){
                // 如果创建失败 表示验证没有通过 输出错误提示信息
                $this->error($usersModel->getError(),U("pass"));
            }

            if($usersModel->create() && $usersModel->save()) {
               // $this->success("修改成功!", U('Users/lists?p=1'));
                $this->redirect('Person/person');
            }
            else {
                // $this->error($usersModel->getError());
            }
    }
}