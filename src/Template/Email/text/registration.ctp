<?php

use Cake\Routing\Router;

$url = Router::url(['controller' => 'User', 'action' => 'index', $user->tokenGenerate()], true);
?>
こんにちは、<?= $user->name ?>さん。
メールアドレスを認証をするために以下のURLにアクセスしてください。
<?= $url ?>