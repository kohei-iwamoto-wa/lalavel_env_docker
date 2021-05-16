<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todos;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class TodoController extends Controller
{
    /**
     * 一覧画面を表示する
     * 
     * @return void
     */
    public function index()
    {
        $todos = Todos::all();
        return view('todo',
            [
                'todos' => $todos,
            ]
        );
    }

    /**
     * 登録画面を表示する
     * 
     * @return void
     */
    public function createTodo() 
    {
        return view('create');
    }

    /**
     * ToDoを登録する
     * 
     * @param Illuminate\Http\Request
     * @return void
     */
    public function storeTodo(Request $request)
    {
        Todos::create(['todo' => $request->todo,
            'user_id' => Auth::user()->id,
        ]);

        return redirect('todo');
    }
}
