<?php

use Fuel\Core\Controller;
use Fuel\Core\View;

class Controller_Member_Mypage extends Controller
{
    public function action_index()
    {
        $view  = View::forge('template/index'); //変数としてビューを割り当てる
        $view->set('head', view::forge('template/head'));
        $view->set('header', view::forge('template/header'));
        $view->set('mypage', view::forge('member/mypage'));
        $view->set('footer', view::forge('template/footer'));

        return $view; // レンダリングしたHTMLをリクエストとして返す
    }
}
