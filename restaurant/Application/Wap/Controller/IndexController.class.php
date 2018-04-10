<?php
namespace Wap\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	//获取新闻数据
    	$newsModel=M('news');
    	$data=$newsModel->select();
    	
    	$jsonData=json_encode($data);
    	echo $jsonData;
    	//dump($jsonData);
    }
    public function show(){
    	$id=I('id');
    	$newsModel=M('news');
    	$data=$newsModel->find();
    	echo json_encode($data);
    }
}