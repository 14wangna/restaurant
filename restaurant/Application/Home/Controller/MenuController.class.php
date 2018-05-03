<?php
namespace Home\Controller;
use Think\Controller;
class MenuController extends Controller {
    public function __construct(){
        parent::__construct();
        if(!isLogin()){
           $this->error("请先登录",U("Login/login"));
           //  $this->redirect('Admin/login',0);
        }
    }
    public function menu(){
        $TodayfoodModel=M('food');
        $conditiona['type']='早餐';
        $data=$TodayfoodModel->where($conditiona)->select();
        $this->assign('breakfastfood',$data);

        $conditionb['type']='午餐';
        $data=$TodayfoodModel->where($conditionb)->select();
        $this->assign('lunchfood',$data);

        $conditionc['type']='晚餐';
        $data=$TodayfoodModel->where($conditionc)->select();
        $this->assign('dinnerfood',$data);

        $conditiond['type']='下午茶';
        $data=$TodayfoodModel->where($conditiond)->select();
        $this->assign('tea',$data);

        $conditione['type']='甜品饮品';
        $data=$TodayfoodModel->where($conditione)->select();
        $this->assign('drink',$data);

         $conditionf['type']='小吃夜宵';
        $data=$TodayfoodModel->where($conditionf)->select();
        $this->assign('snack',$data);

    	$this->display();
    }
  //   public function content(){
  //    	$id=I('id');
		// 	//获取数据
		// $foodsModel = M('todayfood');
		// $data =$foodsModel ->find($id);
		// //分配数据
		// $this->assign('food',$data);

  //       $evaluateModel=M('evaluate');
  //       $condition['foodname']=$data['name'];
  //       $edata=$evaluateModel->where($condition)->select();
  //       $this->assign('evaluate',$edata);
		//   // 新闻部分
  //    	$newsModel=M('news');
  //    	$conditiona['type']='健康饮食';
  //    	$data=$newsModel->where($conditiona)->select();
  //    	$this->assign('newsa',$data);

  //    	$conditionb['type']='饮食咨询';
  //    	$data=$newsModel->where($conditionb)->select();
  //    	$this->assign('newsb',$data);

  //    	$conditionc['type']='为您推荐';
  //    	$data=$newsModel->where($conditionc)->select();
  //    	$this->assign('newsc',$data);

  //       $drinkModel=M('food');
  //       $conditiond['type']='甜品饮品';
  //       $data=$drinkModel->where($conditiond)->limit(0,4)->select();
  //       $this->assign('drink',$data);





  //   	$this->display();
  //   }
    public function contents(){
        
        $id=I('id');
        // print_r($id);
            //获取数据
        $foodsModel = M('food');
        $data =$foodsModel ->find($id);
        //分配数据
        $this->assign('food',$data);


        //菜品评价

        $evaluateModel=M('evaluate');
        $condition['foodname']=$data['name'];
        $edata=$evaluateModel->where($condition)->select();
        // print_r($edata);
        $this->assign('evaluate',$edata);
        //新闻部分
        $newsModel=M('news');
        $conditiona['type']='健康饮食';
        $data=$newsModel->where($conditiona)->select();
        $this->assign('newsa',$data);

        $conditionb['type']='饮食咨询';
        $data=$newsModel->where($conditionb)->select();
        $this->assign('newsb',$data);
        //饮品推荐
        $conditiond['type']='甜品饮品';
        $data=$foodsModel->where($conditiond)->limit(0,4)->select();
        $this->assign('drink',$data);
    	$this->display();
    }
    public function add(){
        $id=I("post.id");
        $foodsModel = M('food');
        $datas =$foodsModel ->find($id);
        $create_time = date("Y-m-d");
        $User = M('order');
        $data['number'] = $_SESSION['number'];
        $data['thumb'] = $datas['thumb'];
        $data['price'] = $datas['price'];
        $data['sum'] = '1';
        $data['name'] = $datas['name'];
        $data['time'] = $create_time;

        $result = $User->create();
        if(!$result){
            $this->ajaxReturn("0",'JSON');
        }
        else{
            $User->data($data)->add();
            $this->ajaxReturn("1",'JSON');
        }
    }
    public function doAdd(){
        $id=I("post.id");
        $foodsModel = M('todayfood');
        $datas =$foodsModel ->find($id);
        $create_time = date("Y-m-d");
        $User = M('order');
        $data['number'] = $_SESSION['number'];
        $data['thumb'] = $datas['thumb'];
        $data['price'] = $datas['price'];
        $data['sum'] = '1';
        $data['name'] = $datas['name'];
        $data['time'] = $create_time;
        $result = $User->create();
        if(!$result){
            $this->ajaxReturn("0",'JSON');
        }
        else{
            $User->data($data)->add();
            $this->ajaxReturn("1",'JSON');
        }
    }

    public function assAdd(){
        $id=I("post.id");
        $content = I("post.content");
        $foodsModel = M('todayfood');
        $data1 =$foodsModel ->find($id);

        $userModel = M('user');
        $user['number'] = $_SESSION['number'];
        $data2 = $userModel ->find($user);
        
        $create_time = date('Y-m-d');

        $User = M('evaluate');
        $data['foodname'] = $data1['name'];
        $data['username'] = $data2['username'];
        $data['thumb'] = $data2['thumb'];
        $data['content'] = $content;
        $data['time'] = $create_time;

        $result = $User->create();
        if(!$result){
            $this->ajaxReturn("0",'JSON');
        }
        else{
            $User->data($data)->add();
            $this->ajaxReturn("1",'JSON');
        }

    }
    // public function evaluate(res){
    //     $id=I("post.id");
    //     $foodsModel = M('todayfood');
    //     $datas =$foodsModel ->find($id);

    //     $User = M('evaluate');
    //     $data['number'] = $_SESSION['number'];
    //     $data['thumb'] = $datas['thumb'];
    //     $data['price'] = $datas['price'];
    //     $data['sum'] = '1';
    //     $data['name'] = $datas['name'];

    //     $result = $User->create();
    //     if(!$result){
    //         $this->ajaxReturn("0",'JSON');
    //     }
    //     else{
    //         $User->data($data)->add();
    //         $this->ajaxReturn("1",'JSON');
    //     }
    // }
}