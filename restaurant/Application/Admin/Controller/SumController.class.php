<?php
namespace Admin\Controller;
use Think\Controller;
class SumController extends Controller {
	public function __construct(){
        parent::__construct();
        if(!isLogin()){
            $this->error("请先登录",U("Admin/login"));
        }
    }
	    public function lists(){
	    	$newsModel = D("order");
	        $cut=8;
	        $currentPage = I("get.p");
	        $offset = ($currentPage-1) * $cut;
	        $news=$newsModel->where()->limit("$offset,$cut")->select();
	        $this->assign("news",$news);
	        $count = $newsModel->count();
	        $Page = new \Think\Page($count, $cut);
	        $show = $Page->show();
	        $this->assign("page", $show);



	    	$this->display();  
	    }
	    public function get_time(){
        	return date("Y-m-d");
    }
         
}
