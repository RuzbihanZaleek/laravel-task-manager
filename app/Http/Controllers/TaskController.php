<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //show all tasks
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    // Show the task creation form
    public function create()
    {
        return view('tasks.create');
    }

    // Handle form submission and save new task
    public function store(Request $request)
    {
        $request->validate(['title' => 'required']);

        Task::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'is_completed' => $request->boolean('is_completed'),
        ]);
        return redirect('/tasks');
    }

    // task edit form
    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    // Update task
    public function update(Request $request, Task $task)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'is_completed' => 'nullable|boolean',
        ]);

        $task->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'is_completed' => $request->boolean('is_completed'),
        ]);

        return redirect('/tasks');
    }

    // Delete a task
    public function destroy(Task $task)
    {
        $task->delete();
        return back();
    }
}
