<?php
namespace Home\Controller;
use Think\Controller;
class OrderController extends Controller {
    public function order(){
    	
     	$orderModel=M('order');
     	$data=$orderModel->select();
     	$this->assign('order',$data);
    	$this->display();
    }
}
