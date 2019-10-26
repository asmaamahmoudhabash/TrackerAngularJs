@extends('dashboard.layouts.dashboard')

@section('content')
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <!-- Main-body start -->
{{--            ===============================--}}
            <div class="main-body">

                <div class="page-wrapper">
                    <!-- Page-header start -->
                    <div class="page-header">
                        <div class="page-header-title">
                            <a href="{{url('AdminPanel/Projects/create')}}">  <button class="btn btn-success btn-round">Add Project</button></a>
                            {{--<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span>--}}
                        </div>
                        <div class="page-header-breadcrumb">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">

                                </li>
                                <li class="breadcrumb-item"> <a href="{{url('AdminPanel/Projects/create')}}">Add  Project </a>
                                </li>
                                <li class="breadcrumb-item">Projects Table
                                </li>
                            </ul>
                        </div>
                    </div>
                @if(count($projects))

                    <!-- Page-header end -->
                    <!-- Page-body start -->
                    <div class="page-body">
                    @include('partials.flash-message')
                        <!-- Basic table card start -->
                        <div class="card">
                            <div class="card-header">
                                <h5>Projects table</h5>
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
                                            <th>Projects Name</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                            <th>Show All</th>

                                        </tr>
                                        </thead>
                                        <tbody>

                                       @foreach($projects as $project)
                                        <tr>
                                            <td>{{$project->title}}</td>

                                            <td>
                                                <a href="{{url('AdminPanel/Projects/'.$project->id.'/edit')}}">
                                                <button class="btn btn-success btn-icon"><i class="ion-edit"></i></button>
                                                </a>
                                            </td>
                                          <td>
                                                  {{Form::open(array('method'=>'delete','url'=>'AdminPanel/Projects/'.$project->id))}}
                                                  <button    Onclick="return ConfirmDelete();"  class="btn btn-danger btn-icon"><i class="ion-filing"></i></button>

                                              {{Form::close()}}
                                          </td>

                                          <td>

                                              <a href="{{url('AdminPanel/Projects/'.$project->id)}}">      <button class="btn btn-primary btn-icon"><i class="icofont icofont-eye-alt"></i></button></a>

                                          </td>

                                        </tr>
                                       @endforeach


                                        </tbody>

                                    </table>



                                </div>
{{--===================================--}}
                    </div>
                    <!-- Page-body end -->

                </div>
            </div>
            <!-- Main-body end -->

            {{--<div id="styleSelector">--}}
               {{----}}
            {{--</div>--}}


                        {{$projects->render()}}

        </div>
    </div>

                              @else
                                <div class="page-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>There is No project Yet</h5>
                                                </div>



                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>




    @endif

@stop
