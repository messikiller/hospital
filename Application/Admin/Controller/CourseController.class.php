<?php
namespace Admin\Controller;
use Think\Controller;

class CourseController extends AdminCommonController
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
	 *  user select course
	 *
	 *  @access common
	 */
	public function select()
	{
		$this->display();
	}

	/**
	 *  add new course for admin
	 *
	 *  @access admin
	 */
	public function add()
	{
		if (! session('?is_admin')) {
			$this->redirect('admin/index/index');
		}

		$status = I('get.status', 0, 'intval');
		$error = array();

		switch ($status) {
			case 1:
				// 添加成功
				$error = array(
					'style' => 'success',
					'text'  => '添加课程成功！'
				);
				break;

			case 2:
				// 课程名称已经存在
				$error = array(
					'style' => 'info',
					'text'  => '课程名称已经存在！'
				);
				break;

			case 3:
				// 添加新课程失败
				$error = array(
					'style' => 'danger',
					'text'  => '添加课程失败！'
				);
				break;
		} // end of switch

		if ($status !== 0) {
			$this->error = $error;
		}

		$this->display();
	}

	/**
	 *  handle add new course for admin
	 *
	 *  @access admin
	 */
	public function addHandle()
	{
		if (! session('?is_admin')) {
			$this->redirect('admin/index/index');
		}

		if (! IS_POST) {
			$this->redirect('admin/course/add');
		}

		$coursename = I('post.coursename', false, 'trim');
		if (! $coursename) {
			$this->redirect('admin/course/add');
		}

		$courseModel = M('course');

		$total = $courseModel->where(array('course_name' => $coursename))->count();
		if ($total != 0) {
			$this->redirect('admin/course/add', array('status' => '2'));
		}

		$addData   = array('course_name' => $coursename);
		$addResult = $courseModel->add($addData);
		if (! $addResult) {
			$this->redirect('admin/course/add', array('status' => '3'));
		}

		$this->redirect('admin/course/add', array('status' => '1'));
	}

	/**
	 * delete one course item for admin
	 *
	 * @access admin
	 */
	public function delete()
	{
		if (! session('?is_admin')) {
			$this->redirect('admin/index/index');
		}

		$id = I('get.id', false, 'intval');
		if (! $id) {
			alert_go('参数错误！', 'admin/course/detail');
		}

		$courseModel = M('course');

		$where  = array('Id' => $id);
		$result =$courseModel->where($where)->delete();

		if ($result === false) {
			$this->redirect('admin/course/detail', array('status' => 2));
		}

		$this->redirect('admin/course/detail', array('status' => 1));
	}

	/**
	 * course list page for admin
	 *
	 * @access admin
	 */
	public function detail()
	{
		if (! session('?is_admin')) {
			$this->redirect('admin/index/index');
		}

		$status = I('get.status', 0, 'intval');
		$error = array();

		switch ($status) {
			case 1:
				// 操作成功
				$error = array(
					'style' => 'success',
					'text'  => '操作成功！'
				);
				break;

			case 2:
				// 删除记录失败
				$error = array(
					'style' => 'danger',
					'text'  => '删除记录失败！'
				);
				break;

		} // end of switch

		if ($status !== 0) {
			$this->error = $error;
		}

		$courseModel = M('course');
		$courseArr   = $courseModel->order('id asc')->select();

		$this->list = $courseArr;
		$this->display();
	}
}
