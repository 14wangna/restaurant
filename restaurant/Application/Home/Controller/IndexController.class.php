<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	// 新闻部分
     	$newsModel=M('news');
     	$conditiona['type']='健康饮食';
     	$data=$newsModel->where($condition)->select();
     	$this->assign('newsa',$data);

     	$conditionb['type']='饮食咨询';
     	$data=$newsModel->where($conditionb)->select();
     	$this->assign('newsb',$data);

     	$conditionc['type']='为您推荐';
     	$data=$newsModel->where($conditionc)->select();
     	$this->assign('newsc',$data);

     	// 今日菜单
     	$todayfoodModel=M('todayfood');
     	$data=$todayfoodModel->select();
     	$this->assign('todayfood',$data);


     	//一周热门

		$foodModel=M('food');
     	$data=$foodModel->order('num desc')->limit(0,16)->select();
     	$this->assign('food',$data);





    	$this->display();
    }
    public function loginout(){
        session('number',null);
        //$this->success('退出成功',U("Admin/login"));
        $this->redirect('Login/login',0);
    }
    
}
