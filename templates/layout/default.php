<?php
// レイアウト
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
        /* ページネーション */
        .pagination li {
            border: solid 1px #9DA5B4;
            padding: 10px;
            /* margin: 10px; */
        }
        .pagination .first {
            border-top-left-radius: 25px;
            border-bottom-left-radius: 25px;
            border: solid 1px #9DA5B4;
            padding-left: 25px;
        }
        .pagination .last {
            border-top-right-radius: 25px;
            border-bottom-right-radius: 25px;
            border: solid 1px #9DA5B4;
            padding-right: 25px;
        }
    }
    </style>
</head>
<body class="" style="">
    <nav class="text-lift navbar p-0 fixed-top bg-bar-for-sp">
        <div>
            <a href="/posts" class="text-decoration-none px-4 pt-3 pb-1" style="font-size: 30px">
                <i class="fas fa-home"></i>
            </a>
        </div>
        <div>
            <?= $this->request->getAttributes()['identity'] == null ? $this->Html->link(__('ログイン'), ['controller' => 'users', 'action' => 'login'], ['class' => 'text-decoration-none px-4']) : $this->Html->link(__('ログアウト'), ['controller' => 'users', 'action' => 'logout'], ['class' => 'text-decoration-none px-4']) ?>
        </div>
    </nav>
    <main class="main">
        <div class="container d-md-flex px-0 py-5">

            <!-- 各種操作アイコンたち mdサイズ以上でのみ表示 -->
            <div class="d-none d-md-block my-4 text-center" style="font-size: 45px">
                <div>
                    <a href="/posts/add" class="text-decoration-none">
                        <i class="fas fa-pen"></i>
                    </a>
                </div>
                <div>
                    <a href="/users/edit/" class="text-decoration-none">
                        <i class="fas fa-user-edit"></i>
                    </a>
                </div>
                <div>
                    <a href="/users/like" class="text-decoration-none">
                        <i class="far fa-thumbs-up"></i>
                    </a>
                </div>
                <div>
                    <a href="#" class="text-decoration-none">
                        <i class="far fa-envelope"></i>
                    </a>
                </div>
                <div>
                    <a href="/users/following" class="text-decoration-none">
                        <i class="fas fa-user-friends"></i>
                        <div style="font-size: 7px">フォロー</div>
                    </a>
                </div>
                <div>
                    <a href="/users/follower" class="text-decoration-none">
                        <i class="fas fa-users"></i>
                        <div style="font-size: 7px">フォロワー</div>
                    </a>
                </div>
            </div>

            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>

            <!-- sm 以下のサイズでのみ表示。スマホで使う用。 -->
            <div class="d-flex d-md-none text-center fixed-bottom justify-content-between bg-bar-for-sp" style="font-size: 30px">
                <div>
                    <a href="/posts" class="text-decoration-none px-4 py-1 text-decoration-none ">
                        <i class="fas fa-home"></i>
                    </a>
                </div>
                <div>
                    <a href="/users/edit/" class="text-decoration-none px-4 py-1 text-decoration-none ">
                        <i class="fas fa-user-edit"></i>
                    </a>
                </div>
                <div>
                    <a href="/users/like" class="text-decoration-none px-4 py-1 text-decoration-none">
                        <i class="far fa-thumbs-up"></i>
                    </a>
                </div>
                <div>
                    <a href="/posts/add" class="text-decoration-none px-4 py-1 text-decoration-none">
                        <i class="fas fa-pen"></i>
                    </a>
                </div>
            </div>
        </div>
    </main>
    <footer>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
