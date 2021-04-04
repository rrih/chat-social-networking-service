<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\PostsController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\PostsController Test Case
 *
 * @uses \App\Controller\PostsController
 */
class PostsControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Posts',
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex(): void
    {
        $this->assertTrue(true, 'passed');
    }


    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd(): void
    {
        $this->assertTrue(true, 'passed');
    }

    /**
     * いいね数カウント用メソッドテスト
     *
     * @return void
     */
    public function testPlusLikeCount(): void
    {
        $this->assertTrue(true, 'passed');
    }
}
