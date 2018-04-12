<?php
namespace Admin\Controller;
use Think\Controller;
class FoodController extends Controller {
	public function __construct(){
        parent::__construct();
        if(!isLogin()){
            $this->error("请先登录",U("Admin/login"));
        }
    }
	    public function lists(){
	    	$foodModel = D("food");
	        $cut=8;
	        $currentPage = I("get.p");
	        $offset = ($currentPage-1) * $cut;
	        $food=$foodModel->where()->limit("$offset,$cut")->order('time desc')->select();
	        $this->assign("food",$food);
	        $count = $foodModel->count();
	        $Page = new \Think\Page($count, $cut);
	        $show = $Page->show();
	        $this->assign("page", $show);
	    	$this->display();  
	    }
	    public function get_time(){
        	return date("Y-m-d");
    }
         public function add(){
         	$foodModel = M('foodtype');
			$data =$foodModel ->select($id);
		    
			//分配数据
			$this->assign('foodtypes',$data);
         	$time = $this->get_time();
         	$this->assign('time',$time);
            $this->display();
         }
         public function doAdd(){

    		$upload = new \Think\Upload();// 实例化上传类
		    $upload->maxSize   =     3145728 ;// 设置附件上传大小
		    $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		    $upload->rootPath  =     THINK_PATH; // 设置附件上传根目录
		    $upload->savePath  =     '../Public/uploads/'; // 设置附件上传（子）目录
		    // 上传文件 
		    $info   =   $upload->upload();


		    if(!$info) {// 上传错误提示错误信息
		        $this->error($upload->getError());
		    }else{// 上传成功
		        //$this->success('上传成功！');
		       $foodModel = M('food');
		    	$data =$foodModel ->create();
		    	//$foodModel->add($data);
		    	
		        $data['thumb']=$info['thumb']['savepath'].$info['thumb']['savename'];
		    	if($foodModel->add($data)){
		    		//$this->success('数据添加成功','lists?p=1');
		    		$this->redirect('lists?p=1',0);

		    }else{
		    	$this->showError('数据添加失败');
		    	}
		    }
    	}
    	public function delete() {
            //全部删除
            $id = $_GET['foodId'];
            if(is_array($id)){
                foreach($id as $value){
                    D("food")->delete($value);
                }  
               // $this->success("批量删除成功！",U("lists?p=1"));
                $this->redirect('lists?p=1',0);
            } 
             //单个删除
            else{
                $foodModel = D("food");
                if($foodModel->where("id=$id")->delete()){
                    //$this->success("删除成功",U("New/lists?p=1"));
                    $this->redirect('lists?p=1',0);
                }
                else{
                    $this->error($foodModel->geterror());
                }
            }      
        }
    	public function edit() {
    		$foodModel = M('foodtype');
			$datas =$foodModel ->select($id);
			$this->assign('foodtypes',$datas);
	        
			$id=I('id');
			//获取数据
			$foodsModel = M('food');
			$data =$foodsModel ->find($id);
			//分配数据
			$this->assign('food',$data);

			$time = $this->get_time();
         	$this->assign('time',$time);
			$this->display();
    	}

   	public function doEdit(){
			$upload = new \Think\Upload();// 实例化上传类
		    $upload->maxSize   =     3145728 ;// 设置附件上传大小
		    $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		    $upload->rootPath  =     THINK_PATH; // 设置附件上传根目录
		    $upload->savePath  =     '../Public/uploads/'; // 设置附件上传（子）目录
		    // 上传文件 
		    $info   =   $upload->upload();
		    if(!$info) {// 上传错误提示错误信息
		        $this->error($upload->getError());
		    }else{// 上传成功
		        //$this->success('上传成功！');
		       $foodModel = M('food');
		    	$data =$foodModel ->create();
		    	//$foodModel->add($data);
		    	
		        $data['thumb']=$info['thumb']['savepath'].$info['thumb']['savename'];
		    	if($foodModel->save($data)){
		    		//$this->success('数据修改成功','lists?p=1');
		    		$this->redirect('lists?p=1',0);

		    }else{
		    	$this->showError('数据修改失败');

		    	}
		    }

		 }

		  public function find(){
	    	$foodModel = M("food");
	    	$date['title']='新闻'; 
			$liset=$foodModel->where($date)->select();
			echo $foodModel;
			exit;
			
	    }
}
