<?php
namespace Admin\Controller;
use Think\Controller;

class IndexController extends AdminCommonController
{
	public function _initialize()
	{
		parent::_initialize();
	}

	public function index()
	{
        $this->display();
    }
}
