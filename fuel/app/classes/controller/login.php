<?php

use Fuel\Core\Controller;
use Fuel\Core\Response;

class Controller_Login extends Controller
{
  public function action_index()
  {

    $form = Fieldset::forge('signupform');
    $form->add('email', 'Email', array('type' => 'email', 'placeholder' => 'Email'));
    $form->add('password', 'Password', array('type' => 'password', 'placeholder' => 'パスワード'));
    $form->add('submit', '', array('type' => 'submit', 'value' => 'ログインする'));

    if (Input::post()) {
      // ログイン成功
      if (Auth::login(Input::post('email'), Input::post('password'))) {
        Response::redirect('member/mypage');
      } else {
        // ログイン失敗
        Response::redirect('signup');
      }
    }

    //変数としてビューを割り当てる
    $view = View::forge('template/index');
    $view->set('head', View::forge('template/head'));
    $view->set('header', View::forge('template/header'));
    $view->set('content', View::forge('auth/signup'));
    $view->set('footer', View::forge('template/footer'));
    $view->set_global('title', 'ログイン画面');
    $view->set_global('signupform', $form->build(''), false);
    $view->set_global('error', $error);

    // レンダリングした HTML をリクエストに返す
    return $view;
  }
}
