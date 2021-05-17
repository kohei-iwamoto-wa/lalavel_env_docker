<?php

namespace Tests\Feature\Database;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;
use App\Models\Todos;
//https://noumenon-th.net/programming/2020/03/04/laravel-phpunit/
class DatabaseTest extends TestCase
{
    // RefreshDatabaseを使用するとテスト後、データを削除してくれる。
    // use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_createTodo()
    {
        $todo = new Todos();
        $todo->todo = 'todo テスト';
        $todo->user_id = 21;
        $saveTodo = $todo->save();
        $this->assertTrue($saveTodo);
    }

    // すでにテストデータベースにデータが登録されている場合のテストコード
    public function testExistDatabase()
    {
        $todo = [
            'todo' => 'sss'
        ];
        Todos::factory()->create($todo);
        $this->assertDatabaseHas('todos', $todo);
    }
}
