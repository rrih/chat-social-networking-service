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
use App\Controller;
use App\View\AppView;
use Cake\View\Helper\PostsHelper;
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
        <?= $cakeDescription ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link href="../../webroot/css/style.css" rel="stylesheet">

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    <style type="text/css">
    @media (prefers-color-scheme: dark) {
        body {
            background-color: #24292E;
            color: #9DA5B4;
        }
        a {
            background-color: #24292E;
            color: #9DA5B4 !important;
        }
        .card-header, .card-body, .card-text, .card-footer {
            background-color: #24292E;
            color: #9DA5B4;
            border-color: #9DA5B4;
        }
        .btn a {
            background-color: #9DA5B4;
            color: #24292E !important;
            border-color: #9DA5B4;
        }
        .btn {
            color: #9DA5B4;
            border-color: #9DA5B4;
        }
        a i {
            color: #9DA5B4;
        }
        .bg-bar-for-sp {
            background-color: #24292E;
            border-color: #9DA5B4;
        }
    }
    </style>
</head>
<body class="">
    <nav class="text-lift navbar p-0 fixed-top bg-bar-for-sp">
        <div>
            <a href="/posts" class=" text-decoration-none px-4 pt-3 pb-1" style="font-size: 30px">
                <i class="fas fa-home"></i>
            </a>
        </div>
        <div>
            <?= $this->request->getAttributes()['identity'] == null ? $this->Html->link(__('ログイン'), ['controller' => 'users', 'action' => 'login'], ['class' => ' text-decoration-none px-4']) : $this->Html->link(__('ログアウト'), ['controller' => 'users', 'action' => 'logout'], ['class' => 'text-decoration-none px-4']) ?>
        </div>
    </nav>
    <main class="main">
        <div class="container p-0">
            <div class="text-center mt-4">
                <div class="h3 pt-5">
                    お気持ち.com (β版)
                </div>
                <?= $this->Html->image('feel.png', array('width' => '200', 'alt' => 'expression feelings')); ?>
                <div class="py-5">
                    <h3>ここは何？🤔</h3>
                    <p class="py-2" style="font-size: 15px">
                        お気持ち表明の場
                    </p>
                </div>
                <div class="border-top border-bottom py-5 h4">
                    お気持ちの数 👉 <?php
                        echo $this->Posts->getPostsCount();
                    ?>
                </div>
                <div class="border-bottom">
                    <?=
                        $this->Html->link(
                            __('お気持ち表明を見に行く'),
                            ['controller' => 'posts', 'action' => 'index'],
                            ['class' => 'btn mx-3 my-5 py-3 px-5 rounded-pill']
                        )
                    ?>
                </div>
                <div class="py-5 border-bottom">
                    <div class="h3">シェアする <i class="fas fa-retweet"></i></div>
                    <div class="d-flex justify-content-center" style="font-size: 30px">
                        <div class="mx-4">
                            <a href="http://twitter.com/intent/tweet?url=https://feel-prod.herokuapp.com&text=お気持ち表明の場"
                            class="text-decoration-none">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </div>
                        <div class="mx-4">
                            <a
                                href="http://www.facebook.com/sharer/sharer.php?u=https://feel-prod.herokuapp.com&t=お気持ち表明の場"
                                class="text-decoration-none"
                            >
                                <i class="fab fa-facebook"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="border-bottom py-5">
                    <div class="h3">
                        更新情報 🎉
                    </div>
                    2020/10/22 検索機能追加
                </div>
                <div class="py-5">
                    <div class="h3">ソース <i class="fas fa-laptop-code"></i></div>
                    <a
                        href="https://github.com/rrih/feel"
                        style="font-size: 30px"
                        class="text-decoration-none"
                    >
                        <i class="fab fa-github"></i>
                    </a>
                </div>
                <div class="py-5">
                    <div class="h3">開発者</div>
                    <div class="d-md-flex justify-content-center">
                        <a href="https://twitter.com/rrih_dev" class="mx-4 text-decoration-none">Twitter</a>
                        <a href="https://github.com/rrih" class="mx-4 text-decoration-none">GitHub</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer navbar text-center ">
        <div>お気持ち.com</div>
        <div>
            <a href="#" class=" text-decoration-none">プライバシーポリシー</a>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
