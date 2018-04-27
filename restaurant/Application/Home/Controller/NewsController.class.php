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

        $conditiona['type']='饮食咨询';
        $data3=$newsModel->where($conditiona)->select();
        $this->assign('news2',$data3);

        $conditiona['type']='为您推荐';
        $data4=$newsModel->where($conditiona)->select();
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
    public function content(){
        $id = $_GET['id'];
        $newsModel = M("news");
        $news=$newsModel->find($id);
        // var_dump($news);exit;
        $this->assign("news",$news);

        $article = M('news');
        // 上一篇
        $prevRecord = $article->where('id<'.I('get.id'))->order('id desc')->limit('1')->find();
        $prev = !$prevRecord ? '没有了' : $prevRecord;
        $this->assign('prev', $prev);

        // 下一篇
        $nextRecord = $article->where('id>'.I('get.id'))->order('id asc')->limit('1')->find();
        $next = !$nextRecord ? '没有了' : $nextRecord;
        $this->assign('next', $next);

        $this->display();
    }
    
}
