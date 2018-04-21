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
     
    	$this->display();
    }
}
