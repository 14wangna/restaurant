<?php
namespace Home\Controller;
use Think\Controller;
class OrderController extends Controller {
	public function __construct(){
        parent::__construct();
        if(!isLogin()){
           $this->error("请先登录",U("Login/login"));
           //  $this->redirect('Admin/login',0);
        }
    }
    public function order(){
    	
        $number=$_SESSION['number'];
        $userModel=M('order');
        $condition['number']=$number;
        $data=$userModel->where($condition)->select();
        // print_r($data);
         $this->assign('order',$data);

     	
    	$this->display();
    }

    public function delete() {
            //全部删除
            $id = $_GET['orderId'];
            $newsModel = D("order");
            if($newsModel->where("id=$id")->delete()){
                $this->redirect('Order/order',0);
            }
            else{
                 $this->error($newsModel->geterror());
            }     
        }
}
