<?php
namespace App\View\Helper;

use Cake\View\Helper;
use Cake\View\View;
use Cake\Datasource\ModelAwareTrait;

class PostsHelper extends Helper
{
    use ModelAwareTrait;

    public function getPostsCount()
    {
        $this->loadModel('Posts');
        return count($this->Posts->find()->select(['id'])->toList());
    }
}
?>
