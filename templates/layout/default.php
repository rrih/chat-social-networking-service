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
</head>
<body class="bg-light">
    <nav class="text-lift navbar text-white bg-primary p-0">
        <div class="d-md-flex">
            <?= $this->Html->link(__('お気持ち.com'), ['controller' => 'pages', 'action' => 'display'], ['class' => 'text-white text-decoration-none']) ?>
            <div class="ml-md-3">
                <a href="/posts" class="text-light">
                    お気持ち表明一覧
                </a>
            </div>
        </div>
        </div>
        <div>
            <div>
                <?= $this->request->getAttributes()['identity'] == null ? $this->Html->link(__('ログインする'), ['controller' => 'users', 'action' => 'login'], ['class' => 'text-white text-decoration-none']) : $this->Html->link(__('ログアウトする'), ['controller' => 'users', 'action' => 'logout'], ['class' => 'text-white text-decoration-none']) ?>
            </div>
            <div>
                <?= $this->Html->link(__('お気持ち表明する'), ['controller' => 'posts', 'action' => 'add'], ['class' => 'text-white text-decoration-none']) ?> <i class="fas fa-pen"></i>
            </div>
        </div>
    </nav>
    <main class="main">
        <div class="container d-md-flex">

            <!-- 各種操作アイコンたち mdサイズ以上でのみ表示 -->
            <div class="d-none d-md-block my-4 text-primary text-center" style="font-size: 45px">
                <div>
                    <a href="/posts">
                        <i class="fas fa-home"></i>
                    </a>
                </div>
                <div>
                    <a href="/users/edit/">
                        <i class="fas fa-user-edit"></i>
                    </a>
                </div>
                <div>
                    <a href="/users/like">
                        <i class="far fa-thumbs-up"></i>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <i class="far fa-envelope"></i>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <i class="fas fa-user-friends"></i>
                        <div style="font-size: 7px">フォロー</div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <i class="fas fa-users"></i>
                        <div style="font-size: 7px">フォロワー</div>
                    </a>
                </div>
            </div>

            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
    <footer>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
