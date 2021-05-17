<?php

namespace Tests\Feature\Database;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;
use App\Models\Todos;

class DatabaseTest extends TestCase
{
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
}
