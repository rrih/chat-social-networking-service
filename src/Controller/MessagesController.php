<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Messages Controller
 *
 * @property \App\Model\Table\MessagesTable $Messages
 * @method \App\Model\Entity\Message[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MessagesController extends AppController
{
    /**
     * View method
     *
     * @param string|null $id Message id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->loadModel('Users');
        $this->loadModel('Rooms');
        $this->loadModel('Messages');
        $id = $this->Authentication->getResult()->getData()->id;
        // 自分にDMは遅れないようにする。
        if ((int)$userId === (int)$id) {
            return $this->redirect(['controller' => 'Posts', 'action' => 'index']);
        }
        // まず room について
        $room = $this->Rooms->find()->where(['user_id' => $id])->first();

        // メッセージについて
        // view に渡す
    }
}
