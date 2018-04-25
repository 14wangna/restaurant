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
                //修改密码
                $condition['password'] = I("post.password");
                $result = $usersModel->where($condition)->count();
                if($result>0){ 
                    $this->error("旧密码不正确",U("edit"));
                }
                $usersModel = D("user");
                 $validate = array(
                    array('repassword','password','两次输入密码不一致',0,'confirm'), // 仅仅需要进行验证码的验证
                );
                $usersModel-> setProperty("_validate",$validate);
                $result = $usersModel->create();
                if (!$result){
                    $this->error($usersModel->getError(),U("person"));
                }
                if($usersModel->create() && $usersModel->save()) {
                    $this->redirect('Person/person');
                }
                if($newsModel->save($data)){
                    $this->redirect('Person/person');
                }else{
                    $this->error();

                    }
                }
    }
}