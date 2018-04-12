<?php
namespace Admin\Controller;
use Think\Controller;
class UsersController extends Controller {
    public function __construct(){
        parent::__construct();
        if(!isLogin()){
            $this->error("请先登录",U("Admin/login"));
        }
    }

     public function lists(){
            $usersModel = D("user");
            $cut=8;
            $currentPage = I("get.p");
            $offset = ($currentPage-1) * $cut;
            $users=$usersModel->where()->limit("$offset,$cut")->select();
            $this->assign("users",$users);

            $count = $usersModel->count();
            $Page = new \Think\Page($count, $cut);
            $show = $Page->show();
            $this->assign("page", $show);

            $this->display(); 
   
    }
    public function get_client_time(){
        return date("Y-m-d");
    }
    public function add(){
        $time = $this->get_client_time();
        $this->assign('time',$time);
    	$this->display();
    }
    public function doAdd(){
    	if(!IS_POST){
    		exit("bad request");
    	}
        $usersModel = D("number"); // 实例化User对象
        $validate = array(
            array('num','require','用户名不能为空！'), 
        );
        $usersModel-> setProperty("_validate",$validate);
        $result = $usersModel->create();
        if (!$result){
            // 如果创建失败 表示验证没有通过 输出错误提示信息
            $this->error($usersModel->getError(),U("add"));
        }else{
            $usersModel->add();
            // 验证通过 可以进行其他数据操作
           // $this->success("新用户添加成功",U("lists?p=1"));
            $this->redirect('lists?p=1',0);
        }
    }
    public function delete() {
        //全部删除
        $id = $_GET['usersId'];
        if(is_array($id)){
            foreach($id as $value){
                D("adminUser")->delete($value);
            }  
            //$this->success("批量删除成功！",U("lists?p=1"));
            $this->redirect('lists?p=1',0);
        } 
        //单个删除
        else{
            $userModel = D("adminUser");
            if($userModel->where("id=$id")->delete()){
               //  $this->success("删除成功",U("Users/lists?p=1"));
                $this->redirect('lists?p=1',0);
            }
            else{
                $this->error($userModel->geterror());
            }
        }      
    }
    public function edit() {
        $userModel = M('user');
        $data =$userModel ->find($id);
        $this->assign("users", $data);
        $time = $this->get_client_time();
        $this->assign('time',$time);
        $this->display();
    }
    public function doEdit() {
        if (!IS_POST) {
            exit("error param");
        }
        $usersModel = D("user");
        if ($usersModel->create() && $usersModel->save()) {
           // $this->success("修改成功!", U('Users/lists?p=1'));
            $this->redirect('lists?p=1',0);
        }
        else {
             $this->error($usersModel->getError());
        }
    }
    
}