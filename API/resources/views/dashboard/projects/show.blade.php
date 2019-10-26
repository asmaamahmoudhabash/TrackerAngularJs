@extends('dashboard.layouts.dashboard')

@section('content')


    <div class="pcoded-content">
        <div class="pcoded-inner-content">

            <div class="main-body">
                <div class="page-wrapper">
                    <div class="page-header">
                        <div class="page-header-title">
                            <h4>Project Details</h4>
                        </div>
                        <div class="page-header-breadcrumb">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">

                                </li>
                                <li class="breadcrumb-item">   <a href="{{url('AdminPanel/Projects')}}"> All Projects</a>
                                </li>
                                <li class="breadcrumb-item">Project Details
                                </li>
                            </ul>
                        </div>
                    </div>


                    <div class="page-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                         <h5 style="color: #800e19">Project Name</h5> : {{ $project->title}}
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="page-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 style="color: #800e19">Project Description</h5> : {{ $project->content}}
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="page-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 style="color: #800e19">finshed tasks</h5> : {{ count( $finished_tasks)/ count( $all_tasks)*100}}%
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="page-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 style="color: #800e19">Not finshed tasks</h5> :{{ count($not_finished_tasks)/ count( $all_tasks)*100}}%
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
        </div>
    </div>


@stop
