<?php
namespace Admin\Controller;
use Think\Controller;
class ApplyController extends Controller {
	public function __construct(){
        parent::__construct();
        if(!isLogin()){
            $this->error("请先登录",U("Admin/login"));
        }
    }
     public function lists(){
    	    $applyModel = D("apply");
            $cut=8;
            $currentPage = I("get.p");
            $offset = ($currentPage-1) * $cut;
            $apply=$applyModel->where()->limit("$offset,$cut")->select();
            $this->assign("apply",$apply);

            $count = $applyModel->count();
            $Page = new \Think\Page($count, $cut);
            $show = $Page->show();
            $this->assign("page", $show);

            $this->display(); 
 
    }
     public function delete() {
        //全部删除
        $id = $_GET['applyId'];
        if(is_array($id)){
            foreach($id as $value){
                D("apply")->delete($value);
            }  
            //$this->success("批量删除成功！",U("lists?p=1"));
           $this->redirect('lists?p=1',0);
        } 
        //单个删除
        else{
            $applyModel = D("apply");
            if($applyModel->where("id=$id")->delete()){
               // $this->success("删除成功",U("Apply/lists?p=1"));
                $this->redirect('lists?p=1',0);
            }
            else{
                $this->error($applyModel->geterror());
            }           
        }      
    }
}