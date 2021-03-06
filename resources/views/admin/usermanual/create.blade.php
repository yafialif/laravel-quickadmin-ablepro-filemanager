@extends('admin.layouts.master')

@section('content')
 <div class="col-sm-12">
        <!-- Nestable card start -->
        <div class="card">
            <div class="card-header">
                <h5>{{ trans('quickadmin::templates.templates-view_create-add_new') }}</h5>
            </div>
            <div class="card-block">
<div class="row">
    <div class="col-md-12 col-sm-offset-2">

        @if ($errors->any())
        	<div class="alert alert-danger">
        	    <ul>
                    {!! implode('', $errors->all('<li class="error">:message</li>')) !!}
                </ul>
        	</div>
        @endif
    </div>
</div>

{!! Form::open(array('route' => config('quickadmin.route').'.usermanual.store', 'id' => 'form-with-validation', 'class' => 'form-horizontal')) !!}

<div class="form-group">
    {!! Form::label('judul', 'judul*', array('class'=>'control-label')) !!}
    <div class="col-md-12">
        {!! Form::text('judul', old('judul'), array('class'=>'form-control form-control-primary')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('isi_panduan', 'Isi Panduan*', array('class'=>'control-label')) !!}
    <div class="col-md-12">
        {!! Form::textarea('isi_panduan', old('isi_panduan'), array('class'=>'form-control ckeditor')) !!}
        
    </div>
</div>

<div class="form-group">
    <div class="col-md-12 col-sm-offset-2">
      {!! Form::submit( trans('quickadmin::templates.templates-view_create-create') , array('class' => 'btn btn-sm btn-primary')) !!}
    </div>
</div>

{!! Form::close() !!}
</div>
</div>
</div>
@endsection