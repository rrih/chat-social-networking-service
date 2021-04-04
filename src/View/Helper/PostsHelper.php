<?php
declare(strict_types=1);

namespace App\View\Helper;

use Cake\View\Helper;
use Cake\Datasource\ModelAwareTrait;
use Cake\View\View;

class PostsHelper extends Helper
{
    use ModelAwareTrait;

    /**
     * 投稿数取得
     *
     * @param void
     * @return int
     */
    public function getPostsCount(): int
    {
        $this->loadModel('Posts');
        return count($this->Posts->find()->select(['id'])->toList());
    }
}
?>
