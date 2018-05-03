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
	        $cut=6;
	        $currentPage = I("get.p");
	        $offset = ($currentPage-1) * $cut;
	        $news=$newsModel->where()->limit("$offset,$cut")->field('sum(sum),name')->group('name')->order('sum(sum) desc')->select();
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

    	public function delete(){
    		$id = I("post.id");

            $orderModel = M("order");
            $condition['name'] = $id;
            // $data = $orderModel ->where($condition)->select();
            $result = $orderModel->where($condition)->delete(); 
            if($result){
                
               // $this->success("批量删除成功！",U("lists?p=1"));
                $this->ajaxReturn("1",'JSON');
            } 
            else{
                $this->ajaxReturn("0",'JSON');
             //单个删除	
            }
    	}
        public function del() {
            //全部删除
            $id = $_GET['sumId'];
            $newsModel = M("order");
            foreach($id as $value){
                $condition['name'] = $value;
                $result = $newsModel->where($condition)->delete();
            }  
               // $this->success("批量删除成功！",U("lists?p=1"));
            $this->redirect('Sum/lists?p=1');
        }
         
}
