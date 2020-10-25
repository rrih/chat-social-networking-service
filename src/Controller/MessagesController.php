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
    public function view($userId)
    {
        $this->loadModel('Users');
        $this->loadModel('Rooms');
        $this->loadModel('Messages');
        $id = $this->Authentication->getResult()->getData()->id;

        // 自分にDMは遅れないようにする。
        if ((int)$userId === (int)$id) {
            // return $this->redirect(['controller' => 'Posts', 'action' => 'index']);
        }
        $otherUser = $this->Users->get($userId);

        // まず room について
        $room = $this->Rooms->find()
            ->where([
                'OR' => [
                    [
                        'user_id' => $id,
                        'other_user_id' => $userId,
                    ],
                    [
                        'user_id' => $userId,
                        'other_user_id' => $id,
                    ],
                ],
            ])
            ->first();
        if (empty($room)) {
            $room = $this->Rooms->newEmptyEntity();
            $room->user_id = $id;
            $room->other_user_id = $userId;
            $this->Rooms->save($room);
        }
        // メッセージについて
        if ($this->request->is('post')) {
            $message = $this->Messages->newEmptyEntity();
            $message->user_id = $id;
            $message->room_id = $room->id;
            $message->message = $this->request->getData('message');
            $this->Messages->save($message);
        }
        $messages = $this->Messages->find()
            ->select([
                'Messages.message',
                'message_user_id' => 'Room.user_id',
                'Messages.created',
                'Messages.modified',
            ])
            ->join([
                'Room' => [
                    'table' => 'rooms',
                    'type' => 'LEFT',
                    'conditions' => 'Room.id = Messages.room_id',
                ]
            ])
            ->where([
                'Messages.room_id' => $room->id,
            ])
            ->toList();
        $this->set(compact('otherUser'));
        $this->set(compact('messages'));
    }
}
