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
    public function getOneUserName($id)
    {
        $this->loadModel('Users');
        if ($this->Users->findById($id)->toList()[0]) {
            $user = $this->Users->findById($id)->toList()[0];
            return $user->name;
        } else {
            return null;
        }
    }

    // 対象ユーザーのIDを引数にとって、フォローしているかどうか、を返す
    public function isFollowing($otherUserId, $currentUserId): bool
    {
        $this->loadModel('Relationships');
        $relation = $this->Relationships->findByFollowerIdAndFollowingId($currentUserId, $otherUserId)->first();
        if ($relation) {
            return true;
        } else {
            return false;
        }
        // return $relation !== null; // true -> フォローできない、 false -> フォローできる
    }
}
?>
