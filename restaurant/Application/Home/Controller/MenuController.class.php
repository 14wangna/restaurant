<?php
namespace Home\Controller;
use Think\Controller;
class MenuController extends Controller {
    public function menu(){
     
    	$this->display();
    }
    public function content(){
     	$id=I('id');
			//获取数据
		$foodsModel = M('todayfood');
		$data =$foodsModel ->find($id);
		//分配数据
		$this->assign('food',$data);
		  // 新闻部分
     	$newsModel=M('news');
     	$conditiona['type']='健康饮食';
     	$data=$newsModel->where($conditiona)->select();
     	$this->assign('newsa',$data);

     	$conditionb['type']='饮食咨询';
     	$data=$newsModel->where($conditionb)->select();
     	$this->assign('newsb',$data);

     	$conditionc['type']='为您推荐';
     	$data=$newsModel->where($conditionc)->select();
     	$this->assign('newsc',$data);

        $drinkModel=M('food');
        $conditiond['type']='甜品饮品';
        $data=$drinkModel->where($conditiond)->limit(0,4)->select();
        $this->assign('drink',$data);


    	$this->display();
    }
    public function contents(){
     
    	$this->display();
    }
    public function add(){
        print_r("111111111");
        if(IS_POST){
        //若是，执行响应操作
            $id=I('id');
            //获取数据
            $newModel = M('news');
            $data =$newModel ->find($id);

            $orderModel = D('order');
            $data = $orderModel->create();
            print_r($data);
            if (!$data){
            // 如果创建失败 表示验证没有通过 输出错误提示信息
            $this->error($orderModel->getError(),U("content"));
            }
            else{
                $orderModel->add();
                // 验证通过 可以进行其他数据操作
            // $this->success("新用户添加成功",U("lists?p=1"));
                $this->redirect('content',0);
            }
        }
        else{
        $this->error("非法请求！");
        }
    }
}
