<?php
class Controller_Home extends Controller
{
	public function action_index()
	{
		$data = array();

		$data['username'] = 'Tsukasa';
		$data['title'] = 'タブのタイトルを変更';

		//ビューへ変数と値を渡す
		return View::forge('home/index', $data);
		//home/indexとすれば、homeフォルダ内のindex.phpのビューという意味になる。
	}
}
