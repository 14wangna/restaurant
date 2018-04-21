<?php
namespace Home\Controller;
use Think\Controller;
class AboutController extends Controller {
	public function __construct(){
        parent::__construct();
        if(!isLogin()){
           $this->error("请先登录",U("Admin/login"));
           //  $this->redirect('Admin/login',0);
        }
    }
    public function about(){
         
    	$this->display();
    }
}
