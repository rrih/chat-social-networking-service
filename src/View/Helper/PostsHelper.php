<?php
namespace App\View\Helper;

use Cake\View\Helper;
use Cake\View\View;
use Cake\Datasource\ModelAwareTrait;

class PostsHelper extends Helper
{
    // public function initialize()
    use ModelAwareTrait;

    // 名前を返す
    public function getPostsCount()
    {
        $this->loadModel('Posts');
        return count($this->Posts->find()->select(['id'])->toList());
    }
}
?>
