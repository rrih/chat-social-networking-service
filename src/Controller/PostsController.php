<?php
declare(strict_types=1);

namespace App\Controller;

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
        $posts = $this->paginate($this->Posts);

        $this->set(compact('posts'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $post = $this->Posts->newEmptyEntity();
        if ($this->request->is('post')) {
            $post = $this->Posts->patchEntity($post, $this->request->getData());
            if ($this->Posts->save($post)) {
                $this->Flash->success(__('お気持ち表明成功'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('お気持ち表明失敗…もう一度やり直してください'));
        }
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
        $post = $this->Posts->get($id);
        $post->like_count += 1;
        if ($this->request->is(['patch', 'post', 'put'])) {
            $post = $this->Posts->patchEntity($post, $this->request->getData());
            if ($this->Posts->save($post)) {
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('エラーが発生しました'));
        }
        $this->set(compact('post'));
    }

    /**
     * わるいいね数カウント用
     *
     * @param [type] $id
     * @return void
     */
    public function plusDislikeCount($id = null)
    {
        $post = $this->Posts->get($id);
        $post->dislike_count += 1;
        if ($this->request->is(['patch', 'post', 'put'])) {
            $post = $this->Posts->patchEntity($post, $this->request->getData());
            if ($this->Posts->save($post)) {
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('エラーが発生しました'));
        }
        $this->set(compact('post'));
    }
}
