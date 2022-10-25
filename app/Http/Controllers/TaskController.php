<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TaskController extends Controller
{
    public function index(){
       return view('tasks.index', [
        'tasks' => Task::orderBy('id', 'DESC')->paginate(3),
       ]);
    }

    public function create() {
        return view('tasks.create');
    }

    public function store(TaskRequest $request){
        // $request->validate([
        //     'product' => ['required', 'min:3', 'max:25'],
        //     'color' => ['required', 'min:3', 'max:25'],
        //     'category' => ['required', 'min:3', 'max:25'],
        //     'price' => ['required', 'min:3', 'max:25'],
        // ]);

        // Task::create([
        //     'product' => $request->product,
        //     'color' => $request->color,
        //     'category' => $request->category,
        //     'price' => $request->price,
        // ]);

        Task::create($request->all());
        return redirect('/tasks')->with('success', 'Task was successful!');
    }

    public function show(Task $task){
        return view('tasks.show', [
            // 'tasks' => DB::table('tasks')->where('id', $id)->first(),
            'tasks' => $task,
        ]);
    }

    public function edit($id){
        return view('tasks.edit', [
            'tasks' => DB::table('tasks')->where('id', $id)->first(),
        ]);
    }

    public function update(Request $request, $id){
         $request->validate([
            'product' => ['required', 'min:3', 'max:25'],
            'color' => ['required', 'min:3', 'max:25'],
            'category' => ['required', 'min:3', 'max:25'],
            'price' => ['required', 'min:3', 'max:25'],
        ]);

        Task::find($id)->update([
            'product' => $request->product,
            'color' => $request->color,
            'category' => $request->category,
            'price' => $request->price,
        ]);
        return redirect('/tasks')->with('success', 'Task update successful!');
    }

    public function destroy($id){
        Task::find($id)->delete();
        return back()->with('success', 'Task delete successful!');
    }
}