<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        session_start();
        if ($_SESSION['name']) {
            $this->display();
        }else {
            $this->error('您还未登录,请先登录!',U('Index/login'),2);
        }
    }
    public function login()
    {
        $this->display();
    }
    public function check()
    {
        session_start();
        $_SESSION['name']=$_POST['username'];
        $data['username']=$_POST['username'];
        $data['password']=$_POST['password'];
        $m=M('user');
        $r=$m->where($data)->select();
        if (!empty($r)) {
            $this->success('居然登录成功了!',U('Index/index'));
        }else {
            $this->error('用户名或者密码错误!');
        }
    }
}
