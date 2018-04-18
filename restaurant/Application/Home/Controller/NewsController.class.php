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

        $news2Model=M('news');
        $conditiona['type']='饮食咨询';
        $data3=$news2Model->where($conditiona)->select();
        $this->assign('news2',$data3);

        $news3Model=M('news');
        $conditiona['type']='为您推荐';
        $data4=$news2Model->where($conditiona)->select();
        $this->assign('news3',$data4);

    	//一周热门
    	$data1=$newsModel->order('click desc')->limit(0,5)->select();
    	$this->assign('news1',$data1);

        $newstypeModel = M('newstype');
            $data2 =$newstypeModel ->select($id);
            
            //分配数据
            $this->assign('newstype',$data2);
    	$this->display();
    }
    
}
