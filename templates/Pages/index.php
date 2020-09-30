<table>
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('username') ?></th>
            <th><?= $this->Paginator->sort('text') ?></th>
            <th class=""><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($posts as $post): ?>
        <tr>
            <td><?= $this->Number->format($post->id) ?></td>
            <td><?= h($post->username) ?></td>
            <td><?= h($post->text) ?></td>
            <td class="">
                <?= $this->Html->link(__('View'), ['action' => 'view', $post->id], ['class' => 'btn btn-outline-danger']) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $post->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $post->id], ['confirm' => __('Are you sure you want to delete # {0}?', $post->id)]) ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
