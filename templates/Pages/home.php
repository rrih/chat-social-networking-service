<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.10.0
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Http\Exception\NotFoundException;

$this->disableAutoLayout();

// if (!Configure::read('debug')) :
//     throw new NotFoundException(
//         'Please replace templates/Pages/home.php with your own version or re-enable debug mode.'
//     );
// endif;

$cakeDescription = 'お気持ち.com';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <header class="text-lift navbar text-white flex-column flex-md-row bg-primary">
        <div class="h2">
            お気持ち.com
        </div>
        <div>
            <div>
                <?= !$isLogin ? $this->Html->link(__('ログインする'), ['controller' => 'users', 'action' => 'login'], ['class' => 'text-white text-decoration-none']) : null ?>
            </div>
            <div>
                <?= $this->Html->link(__('お気持ち表明する'), ['controller' => 'posts', 'action' => 'add'], ['class' => 'text-white text-decoration-none']) ?> <i class="fas fa-pen"></i>
            </div>
        </div>
    </header>
    <main class="main">
        <div class="container">
            <div>
                <div class="text-center m-5">
                    お気持ちを表明、反応を返すwebサービスです。
                    <br>
                    環境分けてないので荒らさないで 😢
                    <br>
                    データは突然消えるかも
                </div>
                <div class="text-center">
                    <div>
                        <?= $this->Html->link(__('お気持ち表明を見に行く'), ['controller' => 'posts', 'action' => 'index'], ['class' => 'btn btn-outline-primary m-5']) ?>
                    </div>
                </div>
                <h2>2020/10/10</h2>
                <p>ユーザー登録機能が追加されましたのでメールアドレス、パスワードを登録しろって言われますが重要なデータ(曖昧)は入れないようにしてください。セキュリティてきとうの極みなので流出してもいいようなものでお願いします。<br>ちなみに email:admin@test.com password:test でログインできます。</p>
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
