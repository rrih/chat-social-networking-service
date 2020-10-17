<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $users = $this->Users;
        $this->set('users', $this->paginate($users));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id)
    {
        $user = $this->Users->get($id);
        $this->set(compact('user'));
    }

    /**
     * ユーザー登録
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('登録できたよ〜！'));
                return $this->redirect(['action' => 'edit']);
            }
            $this->Flash->error(__('すまん、もう一度頼むわ'));
        }
        $this->set('user', $user);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('編集完了'));
                return $this->redirect(['action' => 'edit', $id]);
            }
            $this->Flash->error(__('編集できませんでした'));
        }
        $this->set(compact('user'));
    }

    // user の削除は論理削除で行う。 物理削除は admin 用の画面からのみ行えるようにする
    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    // public function delete($id = null)
    // {
    //     $this->request->allowMethod(['post', 'delete']);
    //     $user = $this->Users->get($id);
    //     if ($this->Users->delete($user)) {
    //         $this->Flash->success(__('The user has been deleted.'));
    //     } else {
    //         $this->Flash->error(__('The user could not be deleted. Please, try again.'));
    //     }

    //     return $this->redirect(['action' => 'index']);
    // }

    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        // ログインアクションを認証を必要としないように設定することで、
        // 無限リダイレクトループの問題を防ぐことができます
        $this->Authentication->addUnauthenticatedActions(['login', 'add']);
    }

    public function login()
    {
        $this->request->allowMethod(['get', 'post']);
        $result = $this->Authentication->getResult();
        // POSTやGETに関係なく、ユーザーがログインしていればリダイレクトします
        if ($result->isValid()) {
            // ログイン成功後に /article にリダイレクトします
            // $redirect = $this->request->getQuery('redirect', [
            //     'controller' => 'Posts',
            //     'action' => 'index',
            // ]);
            return $this->redirect('/posts');

            return $this->redirect($redirect);
        }
        // ユーザーの送信と認証に失敗した場合にエラーを表示します
        if ($this->request->is('post') && !$result->isValid()) {
            $this->Flash->error(__('ログインに失敗しました'));
        }
    }

    public function logout()
    {
        $result = $this->Authentication->getResult();
        // POSTやGETに関係なく、ユーザーがログインしていればリダイレクトします
        if ($result->isValid()) {
            $this->Authentication->logout();
            return $this->redirect(['controller' => 'Posts', 'action' => 'index']);
        }
    }
}
