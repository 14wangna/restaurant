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

    public function revise(){
        $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize   =     3145728 ;// 设置附件上传大小
            $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->rootPath  =     THINK_PATH; // 设置附件上传根目录
            $upload->savePath  =     '../Public/uploads/'; // 设置附件上传（子）目录
            // 上传文件 
            $info   =   $upload->upload();
            if(!$info) {// 上传错误提示错误信息
                $this->error($upload->getError());
            }else{// 上传成功
                //$this->success('上传成功！');
               $userModel = M('user');
                $data =$userModel ->create();
                //$newsModel->add($data);
                
            $data['thumb']=$info['thumb']['savepath'].$info['thumb']['savename'];
                if($userModel->save() !== false){
                    //$this->success('数据修改成功','lists?p=1');
                    $this->redirect('person',0);

            }else{
                $this->error('数据修改失败');

                }
            }
}
}