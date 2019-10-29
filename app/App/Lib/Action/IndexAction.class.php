<?php

// 本类由系统自动生成，仅供测试用途
class indexAction extends Action
{
    public function index ()
    {
        $user_list = M('User')->select();
        if (!D('index')->put_contents(D('index')->get_contents('http://baidu.com'))) {
            echo 'fail';
            exit();
        }
        $this->assign('user_list', $user_list);
        $this->display();
    }

    public function test ()
    {
        $testWord = "hi";
        echo "${testWord} this is a test";
    }
}