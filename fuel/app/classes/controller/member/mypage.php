<?php

use Fuel\Core\View;

class Controller_Member_Mypage extends Controller
{

  public function action_index()
  {
    $view = View::forge('template/index');
    $view->set('head', View::forge('template/head'));
    $view->set('header', View::forge('template/header'));
    $view->set('content', View::forge('member/mypage'));
    $view->set('footer', View::forge('template/footer'));

    // レンダリングしたHTMLを返す
    return $view;
  }
}
