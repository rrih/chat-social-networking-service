<?php
namespace App\View\Helper;

use Cake\View\Helper;
use Cake\View\View;
use Cake\Datasource\ModelAwareTrait;

class UsersHelper extends Helper
{
    // public function initialize()
    use ModelAwareTrait;

    // 名前を返す
    public function getOneUserName(int $id)
    {

        $this->loadModel('Users');
        if ($this->Users->findById($id)->toList()[0]) {
            $user = $this->Users->findById($id)->toList()[0];
            return $user->name;
        } else {
            return null;
        }
    }
}
?>
