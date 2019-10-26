@extends('dashboard.layouts.dashboard')

@section('content')


    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <!-- Main-body start -->
            <div class="main-body">
                <div class="page-wrapper">
                    <!-- Page-header start -->
                    <div class="page-header">
                        <div class="page-header-title">
                            <a href="{{url('AdminPanel/Tasks/create')}}">  <button class="btn btn-success btn-round">Add Task</button></a>
                            {{--<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span>--}}
                        </div>
                        <div class="page-header-breadcrumb">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">

                                </li>
                                <li class="breadcrumb-item"> <a href="{{url('AdminPanel/Tasks/create')}}">Add  Task </a>
                                </li>
                                <li class="breadcrumb-item">Tasks Table
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Page-header end -->
                    <!-- Page-body start -->
                    <div class="page-body">
                    @include('partials.flash-message')
                        <!-- Basic table card start -->
                        <div class="card">
                            <div class="card-header">
                                <h5>Tasks table</h5>
                                {{--<span>use class <code>table</code> inside table element</span>--}}
                                <div class="card-header-right">
                                    <i class="icofont icofont-rounded-down"></i>
                                    <i class="icofont icofont-refresh"></i>
                                    <i class="icofont icofont-close-circled"></i>
                                </div>
                            </div>
                            <div class="card-block table-border-style">
                                <div class="table-responsive">

                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Status</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                            <th>Show All</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                       @foreach($tasks as $value)
                                        <tr>
                                            <td>{{$value->title}}</td>

                                            <td>



                                                @if ($value->status ==0)

                                                    <a href="{{route('finished',['id'=>$value->id])}}">
                                                        <button class="btn btn-default btn-icon"><i class="icofont icofont-space-shuttle"></i></button>
                                                    </a>
                                                @elseif($value->status ==1)
                                                    <a href="{{route('notFinished',['id'=>$value->id])}}">
                                                        <button class="btn btn-primary btn-icon"><i class="icofont icofont-triangle"></i></button>
                                                    </a>
                                                @endif

                                            </td>
                                            <td>
                                                <a href="{{url('AdminPanel/Tasks/'.$value->id.'/edit')}}">
                                                <button class="btn btn-success btn-icon"><i class="ion-edit"></i></button>
                                                </a>
                                            </td>
                                          <td>
                                              {{Form::open(array('method'=>'delete','url'=>'AdminPanel/Tasks/'.$value->id))}}
                                                  <button  Onclick="return ConfirmDelete();" class="btn btn-danger btn-icon"><i class="ion-filing"></i></button>
                                              {{Form::close()}}
                                          </td>

                                          <td>
                                              <a href="{{url('AdminPanel/Tasks/'.$value->id)}}"> <button class="btn btn-info btn-icon"><i class="icofont icofont-eye-alt"></i></button></a>
                                          </td>

                                        </tr>
                                           @endforeach
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div>
                        <!-- Basic table card end -->

                    </div>
                    <!-- Page-body end -->
                    {{$tasks->render()}}
                </div>
            </div>
            <!-- Main-body end -->

            {{--<div id="styleSelector">--}}
               {{----}}
            {{--</div>--}}
        </div>
    </div>


@stop