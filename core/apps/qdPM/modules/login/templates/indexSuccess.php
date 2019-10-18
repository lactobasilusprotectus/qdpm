<?php $form->setDefault('email', base64_decode($sf_request->getCookie('remember_user'))) ?>

<form class="login-form" name="loginForm" id="loginForm" action="<?= url_for('login/index', true) ?>" method="POST">

  <?= $form->renderHiddenFields(false) ?>
  <?= $form->renderGlobalErrors() ?>

  <h3 class="form-title">login</h3>

  <div><?php if (strlen($c = strip_tags(sfConfig::get('app_login_page_content'))) > 0) echo '<p>' . nl2br($c) . '</p>' ?></div>

  <?php if ($sf_user->hasFlash('userNotices')) include_partial('global/userNotices', ['userNotices' => $sf_user->getFlash('userNotices')]); ?>

  <div class="form-group">
    <label for="email">Email</label>
    <div class="input-icon">
      <i class="fa fa-envelope" aria-hidden="true"></i>
      <input class="form-control placeholder-no-fix required email" type="email" placeholder="Email" name="login[email]" id="email" autofocus />
    </div>
  </div>

  <div class="form-group">
    <label for="password">Password</label>
    <div class="input-icon">
      <i class="fa fa-key" aria-hidden="true"></i>
      <input class="form-control placeholder-no-fix required" type="password" placeholder="Password" name="login[password]" id="password">
    </div>
  </div>

  <div class="form-inline form-group">

    <label class="checkbox"> <?= input_checkbox_tag('remember_me', 1, ['checked' => $sf_request->getCookie('remember_me')])  . __('Remember Me') ?></label>
    <a href="#" class="d-inline pull-right">lupa password?</a>
  </div>
  <button type="submit" class="btn btn-primary center-block "><?= __('Login') ?> </button>

  <?php
  $http_referer = '';

  if (isset($_SERVER['REQUEST_URI'])) {
    if (!stristr($_SERVER['REQUEST_URI'], '/login') and !stristr($_SERVER['REQUEST_URI'], '/create') and !stristr($_SERVER['REQUEST_URI'], '/edit') and !stristr($_SERVER['REQUEST_URI'], '/update') and !stristr($_SERVER['REQUEST_URI'], '/new')) {
      if (isset($_SERVER['HTTPS'])) {
        $http_referer = ($_SERVER['HTTPS'] == 'on' ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
      } else {
        $http_referer = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
      }
    }
  }

  echo input_hidden_tag('http_referer', $http_referer); ?>

</form>

<?php include_partial('global/formValidator', ['form_id' => 'loginForm']); ?>