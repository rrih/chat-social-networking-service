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
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Rooms'],
        ];
        $messages = $this->paginate($this->Messages);

        $this->set(compact('messages'));
    }

    /**
     * direct message method
     *
     * @param [type] $userId
     * @return void
     */
    public function view($userId)
    {
        // 現在のユーザのroom を作成する
        $this->loadModel('Users');
        $this->loadModel('Entries');
        $this->loadModel('Rooms');
        $this->loadModel('Messages');

        $id = $this->Authentication->getResult()->getData()->id;
        // 自分にDMは遅れないようにする。
        if ((int)$userId === (int)$id) {
            return $this->redirect(['controller' => 'Posts', 'action' => 'index']);
        }
        $currentUser = $this->Users->get($id);
        $otherUser = $this->Users->get($userId);
        $this->set(compact('currentUser', 'otherUser'));
        $room = $this->Rooms->find()->where(['user_id' => $id])->first();
        // roomなければ作る
        if (empty($room)) {
            $room = $this->Rooms->newEmptyEntity();
            $room->user_id = $id;
            $this->Rooms->save($room);
        }
        // debug($this->Entries->find()->where(['user_id' => $userId])->first());
        $userRoom = $this->Entries->find()->where(['user_id' => $userId])->first();

        if (!empty($userRoom)) {
            // userRoomがあれば、
            $userRoom = $this->Entries->get($userRoom->id);
        } else {
            // userRoom が空の場合、入れる
            $userRoom1 = $this->Entries->newEmptyEntity();
            $userRoom1->user_id = $id;
            $userRoom1->room_id = $room->id;
            $this->Entries->save($userRoom1);
            $userRoom2 = $this->Entries->newEmptyEntity();
            $userRoom2->user_id = $userId;
            $userRoom2->room_id = $room->id;
            $this->Entries->save($userRoom2);
        }
        // メッセージを追加して保存するまでの処理
        if ($this->request->is('post')) {
            $message = $this->Messages->newEmptyEntity();
            $message->user_id = $id;
            $message->room_id = $room->id;
            $message->message = $this->request->getData('message'); // とりあえずhogeでいれる。あとでrequesデータ入れる
            $this->Messages->save($message);
        }
        $messages = $this->Messages->find()->where(['user_id' => $id])->toList();
        $this->set(compact('messages'));
    }
}
