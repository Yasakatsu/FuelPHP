<?php

use Fuel\Core\Controller;

class Controller_Member_Login extends Controller
{
  public function action_index()
  {
    $view = View::forge('template/index');
    $view->set('head', View::forge('template/head'));
    $view->set('header', View::forge('template/header'));
    $view->set('content', View::forge('login/content'));
    $view->set('footer', View::forge('template/footer'));
    return $view;
  }
}
