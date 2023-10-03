<?php

use Fuel\Core\Controller;

class Controller_Login extends Controller
{
  public function action_index()
  {

    $email = DB::select('email')
      ->from('users')
      ->execute()
      ->as_array();
    $password = DB::select('password')
      ->from('users')
      ->execute();


    $error = '';
    $formData = '';

    // Fieldestクラスは、formの生成やバリデーションをしてくれる
    // 実際の生成やバリデーション処理はFormクラスとValidationクラスが行っている
    $form = Fieldset::forge('signupform');

    // addメソッドでformを生成、第一引数：name属性の値、第二引数：ラベルの文言、第三引数：色々な属性を配列形式で
    $form->add('email', 'Email', array('type' => 'email', 'placeholder' => 'Email'));
    $form->add('password', 'Password', array('type' => 'password', 'placeholder' => 'パスワード'));
    $form->add('submit', '', array('type' => 'submit', 'value' => 'ログインする'));

    // Input::method()でHTTPメソッドが返ってくるので、POSTかどうかを確認
    if (Input::method() === 'POST') {

      $auth = Auth::instance(); //Authインスタンス生成
      if ($auth->create_user($formData['username'], $formData['password'], $formData['email'])) {
        // メッセージ格納
        Session::set_flash('sucMsg', 'ログインが完了しました。');
        // リダイレクト
        Response::redirect('member/mypage');
      } else {
        // メッセージ格納
        Session::set_flash('errMsg', '情報に誤りがございます。再度、入力を行ってください。');
        Response::redirect('login');
      }
      // フォームにPOSTされた値をセット
      $form->repopulate();
      $form->form();
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
