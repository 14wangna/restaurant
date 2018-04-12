<?php
namespace Admin\Controller;
use Think\Controller;
class AdviceController extends Controller {
    public function __construct(){
        parent::__construct();
        if(!isLogin()){
           $this->error("请先登录",U("Admin/login"));
           //  $this->redirect('Admin/login',0);
        }
    }
     public function lists(){
            $adviceModel = D("advice");
            $cut=8;
            $currentPage = I("get.p");
            $offset = ($currentPage-1) * $cut;
            $advice=$adviceModel->where()->limit("$offset,$cut")->select();
            $this->assign("advice",$advice);
            $count = $adviceModel->count();
            $Page = new \Think\Page($count, $cut);
            $show = $Page->show();
            $this->assign("page", $show);
            $this->display();  
    } 
    public function delete() {
            //全部删除
            $id = $_GET['adviceId'];
            if(is_array($id)){
                foreach($id as $value){
                    D("Advice")->delete($value);
                }  
               // $this->success("批量删除成功！",U("lists?p=1"));
                $this->redirect('lists?p=1',0);
            } 
             //单个删除
            else{
                $adviceModel = D("Advice");
                if($adviceModel->where("id=$id")->delete()){
                    //$this->success("删除成功",U("New/lists?p=1"));
                    $this->redirect('lists?p=1',0);
                }
                else{
                    $this->error($adviceModel->geterror());
                }
            }      
        }

}