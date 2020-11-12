<div class="container p-0">
    <div class="container text-center p-0">
        <div class="mx-auto">
            <?= $this->Form->create(null, ['url' => '/posts', 'type' => 'get', 'div' => false, 'label' => false, 'class' => 'mt-3']) ?>
                <table class="w-100">
                    <!-- TODO フリート機能実装 とりあえずスマホのみ表示 -->
                    <!-- 自分自身（ログインユーザ）と、フォローしているユーザーのアイコンを表示、クリックしたらそのユーザのフリートを表示させる -->
                    <tr class="d-sm-none">
                        <td class="d-flex justify-content-around mx-auto"
                            style="
                                /* とりあえず固定。あとでレスポンシブ化する */
                                width: 300px;
                                height: 60px;
                                /* スクロールバー */
                                overflow-x: auto;
                                white-space: nowrap;
                                overflow-scrolling: touch;
                                /* スクロールを惰性にする */
                                -webkit-overflow-scrolling: touch;
                            "
                        >
                            <div class="ml-5"></div>
                            <div class="ml-5 bg-dark text-white border rounded-pill d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; font-size: 10px;">
                                追加する
                            </div>
                            <div class="bg-dark text-white border rounded-pill d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; font-size: 10px;">
                                テスト
                            </div>
                            <div class="bg-dark text-white border rounded-pill d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; font-size: 10px;">
                                テスト
                            </div>
                            <div class="bg-dark text-white border rounded-pill d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; font-size: 10px;">
                                テスト
                            </div>
                            <div class="bg-dark text-white border rounded-pill d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; font-size: 10px;">
                                テスト
                            </div>
                            <div class="bg-dark text-white border rounded-pill d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; font-size: 10px;">
                                テスト
                            </div>
                            <div class="bg-dark text-white border rounded-pill d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; font-size: 10px;">
                                テスト
                            </div>
                            <div class="bg-dark text-white border rounded-pill d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; font-size: 10px;">
                                テスト
                            </div>
                            <div class="bg-dark text-white border rounded-pill d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; font-size: 10px;">
                                テスト
                            </div>
                            <div class="bg-dark text-white border rounded-pill d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; font-size: 10px;">
                                テスト
                            </div>
                            <div class="bg-dark text-white border rounded-pill d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; font-size: 10px;">
                                テスト
                            </div>
                        </td>
                    </tr>
                </table>
                <table class="w-100">

                    <!-- 検索フォーム いつか別ヘルパー的に切り出したい -->
                    <tr>
                        <td class="w-100">
                            <?= $this->Form->control('content', ['label' => false, 'type' => 'text', 'div' => false, 'class' => 'form-control', 'value' => $params['q'], 'empty' => true, 'required' => false, 'name' => 'q', 'placeholder' => 'キーワード検索']); ?>
                        </td>
                        <td class="d-block">
                            <?= $this->Form->button('検索', ['div' => true, 'class' => 'btn', 'style' => 'width: 75px']) ?>
                        </td>
                    </tr>
                </table>
            <?= $this->Form->end() ?>

            <?php if($posts->toList() == []) { ?>
                <div class="h5 my-4">「<?php echo ($params['q']); ?>」の検索結果はありません。</div>
            <?php } ?>

            <?php foreach ($posts as $post): ?>
                <!-- post card -->
                <div class="card my-3 shadow-sm">
                    <div class="card-header h5 border-bottom text-left">
                        <?php if ($post->user_name) { ?>
                            <a href="/users/profile/<?= $post->user_id ?>" class="text-decoration-none"><?= $post->user_name ?></a>
                        <?php } ?>
                    </div>
                    <div class="card-body text-left">
                        <?= h($post->text) ?>
                    </div>
                    <div class="card-text text-right">
                        表明日時 <?= $post->post_created->format('yy-m-d h:m:s') ?>
                    </div>
                    <?php if ($post->post_created) { ?>
                        <div class="card-footer text-right" style="font-size: 30px">
                            <!-- TODO モーダル開いて、コメントを投稿できるようにする -->
                            <a href="#" class="btn rounded-pill px-3">
                                <i class="far fa-comment"></i>
                            </a>
                            <a href="#" class="btn rounded-pill px-3">
                            <i class="fas fa-retweet"></i>
                            </a>
                            <?= $this->Form->postLink(
                                __('👍 ' . $post->like_count),
                                [
                                    'action' => 'plusLikeCount',
                                    $post->id
                                ],
                                [
                                    'class' => 'btn rounded-pill'
                                ]
                            )
                            ?>
                            <?= $this->Form->postLink(
                                __('👎 ' . $post->dislike_count),
                                [
                                    'action' => 'plusDislikeCount',
                                    $post->id
                                ],
                                [
                                    'class' => 'btn rounded-pill'
                                ]
                            )
                            ?>
                        </div>
                    <?php } ?>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="paginator text-center">
            <ul class="pagination justify-content-center">
                <?= $this->Paginator->first('最初へ') ?>
                <?= $this->Paginator->prev('←') ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next('→') ?>
                <?= $this->Paginator->last('最後へ') ?>
            </ul>
        </div>
    </div>
</div>


