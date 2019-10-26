@include('partials.flash-message')
@include('partials.validation-errors')
@php
    $projects = App\Models\Project::pluck('title', 'id');


@endphp

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Title</label>
    <div class="col-sm-10">
        {{Form::text('title',null,[
        'class'=>'form-control',
        'id'=>'title',

    ])}}
    </div>
</div>


<div class="form-group row">
    <label class="col-sm-2 col-form-label">content</label>
    <div class="col-sm-10">
        {{Form::textarea('content',null,[
        'class'=>'form-control',
        'id'=>'body',

    ])}}
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Project</label>
    <div class="col-sm-10">
        {{Form::select('project_id',$projects,null,[
        'class'=>'form-control',
        'id'=>'project_id',
        'placeholder'=>'Select  Project',
      ])}}
    </div>
</div>





<div class="form-group row">
    <label class="col-sm-2 col-form-label">Status</label>
    <div class="col-sm-10">
        {{

           Form::select('status',
            ['0' => 'Not Finished', '1' => 'Finished'], null,
            ['placeholder' => 'Select Status',
            'class'=>'form-control',
            'id'=>'status',


            ])
           }}

    </div>
</div>