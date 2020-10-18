<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\I18n\Time;

/**
 * Posts Controller
 *
 * @property \App\Model\Table\PostsTable $Posts
 * @method \App\Model\Entity\Post[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PostsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $posts = $this->Posts->find()
            ->select([
                'username',
                'text',
                'like_count',
                'dislike_count',
                'created',
            ])
            ->order([
                'created' => 'desc',
            ]);
        $this->paginate($posts);
        $this->set(compact('posts'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->loadModel('Users');
        $id = $this->Authentication->getResult()->getData()->id;
        $user = $this->Users->get($id);
        $post = $this->Posts->newEmptyEntity();
        $post->created = Time::now();
        $post->modified = Time::now();
        if ($this->request->is('post')) {
            $post = $this->Posts->patchEntity($post, $this->request->getData());
            $post->username = $user->name;
            if ($this->Posts->save($post)) {
                $this->Flash->success(__('お気持ち表明成功'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('お気持ち表明失敗…もう一度やり直してください'));
        }
        $this->set(compact('user'));
        $this->set(compact('post'));
    }

    // いちいちリダイレクトしてるの、多分直した方が良いけどこれSPA化しないと実現できない感じ？
    /**
     * いいね数カウント用
     *
     * @param [type] $id
     * @return void
     */
    public function plusLikeCount($id = null)
    {
        $this->autoRender = false;
        $this->loadModel('Users');
        $isLogin = $this->Authentication->getResult()->isValid();
        if (!$isLogin) {
            // ログインしていなかったらログインページへ飛ばす
            return $this->redirect('/users/login');
        }

        if ($this->request->is(['patch', 'post', 'put'])) {
            $post = $this->Posts->get($id);
            $post->like_count += 1;
            if ($this->Posts->save($post)) {
                return $this->redirect($this->referer());
            }
            $this->Flash->error(__('エラーが発生しました'));
        }
    }

    /**
     * わるいいね数カウント用
     *
     * @param [type] $id
     * @return void
     */
    public function plusDislikeCount($id = null)
    {
        $this->autoRender = false;
        $this->loadModel('Users');
        $isLogin = $this->Authentication->getResult()->isValid();
        if (!$isLogin) {
            // ログインしていなかったらログインページへ飛ばす
            return $this->redirect('/users/login');
        }
        if ($this->request->is(['patch', 'post', 'put'])) {
            $post = $this->Posts->get($id);
            $post->dislike_count += 1;
            if ($this->Posts->save($post)) {
                return $this->redirect($this->referer());
            }
            $this->Flash->error(__('エラーが発生しました'));
        }
    }
}
