<?php
namespace Admin\Controller;
use Think\Controller;

class CommentController extends AdminCommonController
{
    public function _initialize()
	{
		parent::_initialize();
	}

	/**
	 *  view own course
	 *
	 * @access common
	 */
	public function view()
	{
        $this->display();
    }

	/**
	 *  add new comment
	 *
	 *  @access common
	 */
	public function add()
	{
		$this->display();
	}

	/**
	 *  comment detail for admin
	 *
	 *  @access admin
	 */
	public function detail()
	{
		if (! session('?is_admin')) {
			$this->redirect('admin/index/index');
		}

        $this->display();
	}
}
