<div class="ctn-main">
  <section class="ctn-form">
    <h1>ユーザー登録</h1>
    <? var_dump($formData); ?>

    <?php if (!empty($error)) : ?>
      <ul class="area-error-msg">
        <?php foreach ($error as $key => $val) : ?>
          <li><?= $val ?></li> <!-- php　echo $valのショートハンド -->
        <?php
        endforeach;
        ?>
      </ul>
    <?php
    endif;
    ?>
    <?= $signupform ?> <!-- php　echo $signupのショートハンド -->
  </section>
</div>