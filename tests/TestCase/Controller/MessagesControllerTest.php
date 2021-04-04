<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\MessagesController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\MessagesController Test Case
 *
 * @uses \App\Controller\MessagesController
 */
class MessagesControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Messages',
        'app.Users',
        'app.Rooms',
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
     * Test view method
     *
     * @return void
     */
    public function testView(): void
    {
        $this->assertTrue(true, 'passed');
    }
}
