<h1>メインタイトルです。</h1>
<div class="welcome_user">
</div>
<?php echo Asset::img(
  'fuelphp-logo.png',
  array(
    'style' => 'height:auto;width:500px',
    'alt' => 'タイトル画像'
  )
); ?>
<p>
  <?php echo Html::anchor('welcome/index', 'TOP画面へ戻る（anchorメソッド使用中）'); ?>
</p>

<?php Asset::add_path('assets/upload/', 'img'); ?>
<?php echo Asset::img('laravel_logo.png', array('style' => 'height:auto;width:200px', 'alt' => 'uploadされた画像を表示')); ?>
<p>assets/js,css,img以外のフォルダを作って表示</p>