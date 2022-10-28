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

    public function store(Request $request){
        // return $request->file('image')->store('post-image');
       $request->validate([
            'product' => ['required', 'min:3', 'max:25'],
            'color' => ['required', 'min:3', 'max:25'],
            'category' => ['required', 'min:3', 'max:25'],
            'price' => ['required', 'min:3', 'max:25'],
            'image' => ['image', 'mimes:jpeg,png,gif,svg', 'max:1024']
        ]);

        // Task::create([
        //     'product' => $request->product,
        //     'color' => $request->color,
        //     'category' => $request->category,
        //     'price' => $request->price,
        // ]);
            // $file = $request->hasFile('image');
            $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            // $nameFile = $request->file('images');
            // $validatedData['image'] = $request->file('image')->store('post-image');
            $input['image'] = $profileImage;
        }

        Task::create($input);
        return redirect('/tasks')->with('success', 'Task was successful!');
    }

    public function show(Task $task){
        return view('tasks.show', [
            // 'tasks' => DB::table('tasks')->where('id', $id)->first(),
            'tasks' => $task,
        ]);
    }

    public function edit(Task $task){
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, $id){
         $request->validate([
            'product' => ['required', 'min:3', 'max:25'],
            'color' => ['required', 'min:3', 'max:25'],
            'category' => ['required', 'min:3', 'max:25'],
            'price' => ['required', 'min:3', 'max:25'],
            'image' => ['image', 'mimes:jpeg,png,gif,svg', 'max:1024']
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            // $nameFile = $request->file('images');
            // $validatedData['image'] = $request->file('image')->store('post-image');
            $input['image'] = $profileImage;
        }else {
            unset($input['image']);
        }


        // Task::find($id)->update([
        //     'product' => $request->product,
        //     'color' => $request->color,
        //     'category' => $request->category,
        //     'price' => $request->price,
        // ]);

        Task::find($id)->update($input);
        return redirect('/tasks')->with('success', 'Task update successful!');
    }

    public function destroy($id){
        Task::find($id)->delete();
        return back()->with('success', 'Task delete successful!');
    }
}