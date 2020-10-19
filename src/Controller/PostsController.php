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
        $this->loadModel('Users');
        $id = $this->Authentication->getResult()->getData()->id;
        if ($id != null) {
            // user を取得するのは、 トップ画面のレイアウトでいいねとか表示させるため
            $user = $this->Users->get($id);
            $this->set(compact('user'));
        }

        $posts = $this->Posts->find()
            ->select([
                'id',
                'user_id',
                'user_name' => 'Users.name',
                'text',
                'like_count',
                'dislike_count',
                'post_created' => 'Posts.created',
            ])
            ->join([
                'Users' => [
                    'table' => 'users',
                    'type' => 'left',
                    'conditions' => 'Users.id = Posts.user_id',
                ]
            ])
            ->order([
                'post_created' => 'desc',
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
        if ($this->request->is('post')) {
            $post = $this->Posts->patchEntity($post, $this->request->getData());
            $post->user_id = $user->id;
            $post->created = Time::now();
            $post->modified = Time::now();
            if ($this->Posts->save($post)) {
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
        $this->loadModel('Likes');
        $isLogin = $this->Authentication->getResult()->isValid();
        if (!$isLogin) {
            // ログインしていなかったらログインページへ飛ばす
            return $this->redirect('/users/login');
        }
        $post = $this->Posts->get($id);
        $postEntity = $this->Posts->patchEntity($post, $this->request->getData());
        $postEntity->like_count = $postEntity->like_count + 1;
        $userId = $this->Authentication->getResult()->getData()->id;
        $like = $this->Likes->newEmptyEntity();
        $like->user_id = $userId;
        $like->post_id = $post->id;
        if (!$this->Posts->save($post) || !$this->Likes->save($like)) {
            $this->Flash->error(__('like できませんでした'));
        }
        return $this->redirect(['action' => 'index']);
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
        $post = $this->Posts->get($id);
        $postEntity = $this->Posts->patchEntity($post, $this->request->getData());
        $postEntity->dislike_count = $postEntity->dislike_count + 1;
        if (!$this->Posts->save($post)) {
            $this->Flash->error(__('dislike できませんでした'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
