<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post $post
 */
?>
<div class="row">
    <div class="column-responsive column-80">
        <div class="posts form content">
            <?= $this->Form->create($post) ?>
            <fieldset>
                <legend><?= __('お気持ち表明画面') ?></legend>
                <?php
                    echo $this->Form->control('username', ['label' => 'ユーザー名']);
                    echo $this->Form->control('text', ['label' => 'お気持ち内容']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('この内容でお気持ち表明する'), ['class' => 'btn btn-outline-primary']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
