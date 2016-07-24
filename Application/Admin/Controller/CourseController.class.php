<?php
namespace Admin\Controller;
use Think\Controller;

class CourseController extends AdminCommonController
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