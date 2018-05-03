<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	// 新闻部分
     	$newsModel=M('news');
     	$conditiona['type']='健康饮食';
     	$data=$newsModel->where($conditiona)->select();
     	$this->assign('newsa',$data);

     	$conditionb['type']='饮食咨询';
     	$datab=$newsModel->where($conditionb)->select();
     	$this->assign('newsb',$datab);

     	$conditionc['type']='为您推荐';
     	$datac=$newsModel->where($conditionc)->select();
     	$this->assign('newsc',$datac);

     	// 今日菜单
     	$todayfoodModel=M('todayfood');
     	$datad=$todayfoodModel->select();
     	$this->assign('todayfood',$datad);


     	//一周热门

        $orderModel=M('order');
        $dataorder=$orderModel->field('sum(sum),name')->group('name')->select();
        $foodModel=M('food');
        $dataa=$foodModel->select();
        foreach ($dataa as $key) {
            foreach ($dataorder as $val) {
                if($key['name']==$val['name']){
                    $key['num']=$val['sum(sum)'];
                    M("food")->data($key)->save();
                    // echo $val['name'];
                    // echo $val['sum(sum)'];
                }
            }
        }
        


		// $foodModel=M('food');
     	$data=$foodModel->order('num desc')->limit(0,16)->select();
     	$this->assign('food',$data);

        $fooda['type']='早餐';
        $data=$foodModel->where($fooda)->select();
        $this->assign('fooda',$data);

        $foodb['type']='午餐';
        $data=$foodModel->where($foodb)->select();
        $this->assign('foodb',$data);

        $foodc['type']='下午茶';
        $data=$foodModel->where($foodc)->select();
        $this->assign('foodc',$data);

        $foodd['type']='晚餐';
        $data=$foodModel->where($foodd)->select();
        $this->assign('foodd',$data);
 
        $foode['type']='甜品饮品';
        $data=$foodModel->where($foode)->select();
        $this->assign('foode',$data);

        $foodf['type']='小吃夜宵';
        $data=$foodModel->where($foodf)->select();
        $this->assign('foodf',$data);

    	$this->display();
    }
    public function loginout(){
        session('number',null);
        //$this->success('退出成功',U("Admin/login"));
        $this->redirect('Login/login',0);
    }
    public function search(){
         $name = $_POST['name'];

        $gameModel = M("todayfood");
        $condition['name'] = $name;
        $data =$gameModel->where($condition)->find();
        
        $id = $data['id'];
        print_r($id);
        if($id){
            $this->redirect("Menu/content",array("id"=>$id));
        }else{
            $this->error("很抱歉，暂时没有这个游戏！");
        }

    }
    
}
