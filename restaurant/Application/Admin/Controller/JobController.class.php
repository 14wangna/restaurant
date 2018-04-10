<?php
namespace Admin\Controller;
use Think\Controller;
class JobController extends Controller {
	public function __construct(){
        parent::__construct();
        if(!isLogin()){
            $this->error("请先登录",U("Admin/login"));
        }
    }
     public function lists(){
    	$jobModel = D("job");
		$job = $jobModel->select();
		$this->assign('job',$job);
		$this->display();  
    }
    public function get_time(){
    	return date("Y-m-d");
    }
    public function add(){
    	$time = $this->get_time();
    	$this->assign('time',$time);
    	$this->display();
    }
    public function doAdd(){
	        if(!IS_POST){
	            exit("bad request");
	        }
	        $jobModel = D("job");
	        if(!$jobModel->create()){
	            $this->error($jobModel->getError());          
	        }
	        if($jobModel->add()){
	           // $this->success("添加成功",U("lists?p=1"));
                $this->redirect('lists?p=1',0);
	        }
	        else{
	            $this->error("添加失败");
	        }
    	}
    public function delete() {
        //全部删除
        $id = $_GET['jobId'];
        if(is_array($id)){
            foreach($id as $value){
                D("job")->delete($value);
            }  
            //$this->success("批量删除成功！",U("lists?p=1"));
            $this->redirect('lists?p=1',0);
        } 
        //单个删除
        else{
            $jobModel = D("job");
            if($jobModel->where("id=$id")->delete()){
               // $this->success("删除成功",U("Job/lists?p=1"));
                $this->redirect('lists?p=1',0);
            }
            else{
                $this->error($jobModel->geterror());
            }       
        }      
    }
    public function edit() {

	        $id = intval($_GET['id']);
	        if ($id == '') {
	            exit("error param");
	        }
	        $job = M("job")->find($id);
	        $this->assign("job", $job);
	        $time = $this->get_time();
    		$this->assign('time',$time);
	        $this->display();
    	}

   		 public function doEdit() {
	        if (!IS_POST) {
	            exit("error param");
	        }
	        $jobModel = D("job");
	        if ($jobModel->create() && $jobModel->save()) {
	           // $this->success("修改成功!", U('Job/lists?p=1'));
                $this->redirect('lists?p=1',0);
	        }
	        else {
	            // $this->error($jobModel->getError());
	        }
    	}
    
}