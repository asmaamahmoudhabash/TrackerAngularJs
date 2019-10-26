<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects= Project::all();
        return response()->json($projects->toArray());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Project $model)
    {
//
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Project::create($request->all());
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

        $this->project = Project::find($id );
        $all_tasks=Task::where('project_id',$id)->get();
        $not_finished_tasks =Task::where('status',0)->where('project_id',$id)->count();
        $finished_tasks =Task::where('status',1)->where('project_id',$id)->count();
        return response()->json( $this->project);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $this->project = Project::find($id );
        return response()->json( $this->project);

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

        $this->project = Project::find($id );
        $this->project->fill($request->all());
        $this->project->save();
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
//          Project::findOrFail($id)->delete() ;
//          return redirect('AdminPanel/Projects')->with('error','SuccessDeleting!');

        $this->project = Project::find($id );
        $this->project->delete();
        return response()->json(["success"=>"deleted successfully"]);

    }
}
