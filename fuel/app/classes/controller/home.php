<?php

use \Model\Welcome;

class Controller_Home extends Controller_Template
{
	public $template = 'template/index';
	public function action_index($param1 = null, $param2 = null)
	{
		//テンプレートを使用してviewを表示
		$this->template->head = View::forge('template/head');
		$this->template->content = View::forge('home/content');
		$this->template->footer = View::forge('template/footer');
		$data = Welcome::get_results();
		$this->template->data = $data;
	}
}
