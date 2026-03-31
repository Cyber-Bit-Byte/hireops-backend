<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    // LIST
    public function index()
    {
        return Task::with('company')->latest()->get();
    }

    // CREATE
    public function store(Request $request)
    {
        $data = $request->validate([
            'company_id' => 'required|exists:companies,id',
            'title' => 'required|string',
            'description' => 'nullable',
            'status' => 'in:todo,in_progress,done',
            'due_date' => 'nullable|date'
        ]);

        $task = Task::create($data);

        return response()->json([
            'message' => 'Task created',
            'data' => $task
        ]);
    }

    // SHOW
    public function show($id)
    {
        return Task::with('company')->findOrFail($id);
    }

    // UPDATE
    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);

        $task->update($request->all());

        return response()->json([
            'message' => 'Task updated',
            'data' => $task
        ]);
    }

    // DELETE
    public function destroy($id)
    {
        Task::findOrFail($id)->delete();

        return response()->json([
            'message' => 'Task deleted'
        ]);
    }
}
