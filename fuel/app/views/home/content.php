<h1>コンテンツタイトルです。</h1>
<div class="welcome_user"><?php echo $username ?></div>
<div><?php echo Asset::img('logo.jpg', array('style' => 'height:auto;width:200px', 'alt' => 'タイトル画像')); ?></div>
<p><?php echo Html::anchor('welcome/index', 'トップへ戻る'); ?></p>
<?php Asset::add_path('assets/upload', 'img'); ?>
<?php echo Asset::img('rails_logo.png', array('style' => 'height:auto;width:100px', 'alt' => 'タイトル')); ?>
<?php echo Asset::img('rubyIcon.png', array('style' => 'height:auto;width:100px', 'alt' => 'タイトル')); ?>
<p>『assets/標準以外の任意のディレクトリ』上のファイルを読み込み中</p>