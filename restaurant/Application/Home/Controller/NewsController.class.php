<?php
namespace Home\Controller;
use Think\Controller;
class NewsController extends Controller {
    public function news(){
     	//健康饮食
    	$newsModel=M('news');
    	$conditiona['type']='健康饮食';
    	$data=$newsModel->where($conditiona)->select();
    	$this->assign('news',$data);

    	//一周热门
    	$data1=$newsModel->order('click desc')->limit(0,5)->select();
    	$this->assign('news1',$data1);


    	$this->display();
    }
    
}
