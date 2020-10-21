<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post $post
 */
?>
<div class="container">
    <div class="form w-100">
        <?= $this->Form->create($post) ?>
            <div>お気持ち表明画面</div>
            <?= $user->name != null ? $user->name : 'null' ?> <a href="/users/edit/<?= $user->id ?>" class="text-decoration-none">編集する</a>
            <?php
                echo $this->Form->control('text', ['label' => 'お気持ち内容', 'type' => 'textarea', 'class' => 'form-control', 'maxlength' => 1000]);
            ?>
            <div class="text-center my-3"><?= $this->Form->button(__('この内容でお気持ち表明する'), ['class' => 'btn btn-outline-primary rounded-pill px-5 py-3']) ?></div>
        <?= $this->Form->end() ?>
    </div>
</div>
