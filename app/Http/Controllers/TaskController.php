<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\Task;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = auth()-›user()-›tasks();
        return view( 'dashboard', compact ('tasks'));
    }
    
    public function add()
    {
        return view('add');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $this-›validate($request, [
            'description' => 'required'
            ]);
            $task = new Task;
            $task->description = $request-›description;
            $task->user_id = auth()->user()->id;
            $task->save();
            return redirect ('/dashboard');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTaskRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        if (auth()->user()-id == $task-›user_id) {
        return view('edit', compact('task'));
        }
        else {
            return redirect ('/dashboard');
        }
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTaskRequest $request, Task $task)
    {
        if(isset ($_POST['delete'])) {
            $task->delete();
            return redirect('/dashboard');}
            else {
                $this->validate($request, [
                    'description' => 'required'
                    ]);
                    $task->description = $request->description;
                    $task->save();
                    return redirect('/dashboard');
            }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        //
    }
}
