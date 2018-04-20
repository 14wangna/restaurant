<?php
namespace Home\Controller;
use Think\Controller;
class AboutController extends Controller {
    public function about(){
     
    	$this->display();
    }
    public function doAdd(){

		$advice = M('advice');
		if($advice->create()){
			$data=$advice->add();
		    redirect('About/about');
		}
	}

}
