<?php

namespace App\Http\Controllers;


use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;


class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::all();
        return response()->json($tasks->toArray());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Task $model)
    {
//        return view('dashboard.tasks.create', compact('model'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Task::create($request->all());
        return response()->json(["success"=>"added successfully"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->task = Task::find($id );
        return response()->json( $this->task);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task = Task::findOrFail($id);
        $project = Project::with('id',$task->project_id);
        return response()->json(compact('task','project'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->task = Task::find($id );
        $this->task->fill($request->all());
        $this->task->save();
        return response()->json(["success"=>"updated successfully"]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


        $this->task = Task::find($id );
        $this->task->delete();
        return response()->json(["success"=>"deleted successfully"]);
    }
    public function allProjects()
    {
        $projects = Project::get();
        return json_encode($projects);
    }



    public function fe_active($id)
    {

        $task =  Task::findOrFail($id);
        if ($task->status == 1) {
            $task->status = 0;
        } else {
            $task->status =1;
        }
        $task->save();
        return response()->json(compact('task'));
    }

}
