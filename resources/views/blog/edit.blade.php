@extends('layouts.app')
@section('title')
    Edit Blog | ARM Pension
@endsection
@section('content')
<div class="container">
    <h1>Create Blog</h1>
    {!! Form::open(['action'=>['BlogController@update',$blog->id], 'method' => 'POST','enctype'=>"multipart/form-data"]) !!}

        <div class="form-group">
            {{Form::label('Title',  'Title')}}
            {{Form::text('title',$blog->title, ['class' =>'form-control', 'placeholder' => "Title"])}}
        </div>

        
        <div class="form-group">
            <label> Body </label>
            <textarea style="height:250px;" name="body" class="form-control" >{{!!$blog->body!!}} </textarea>
        </div>

        
    <div class="form-group">
        <label for="file">Upload images</label>
        <input required type="file" class="form-control" name="image">
    </div>




        {{Form::submit('Create', ['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>
@endsection
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>
    tinymce.init({
        selector:'textarea',
        width: 900,
        height: 300
    });
</script>


{{-- @extends('layouts.admin-dashboard')
@section('title', 'Edit Course | Findworka')
@section('body')
<div class="container">
{!! Form::open(['action'=>['CourseController@update', $courses->id], 'method' => 'POST']) !!}
<div class="form-group">
    {{Form::label('name',  'Name')}}
    {{Form::text('name',$courses->name, ['class' =>'form-control', 'placeholder' => "Course Name"])}}
</div>
<div class="form-group">
    {{Form::label('description',  'Course Description')}}
    {{Form::textarea('description', $courses->description, ['class' =>'form-control', 'placeholder' => "Course Description"])}}
</div>
<div class="form-group">
    {{Form::label('price',  'Course Price')}}
    {{Form::text('price',$courses->price, ['class' =>'form-control', 'placeholder' => "Course Price"])}}
</div>
<div class="form-group">
    {{Form::label('duration',  'Course body')}}
    {{Form::text('duration', $courses->body, ['class' =>'form-control', 'placeholder' => "Course body"])}}
</div>
<div class="form-group">
<label for="program_id">Pick a Program</label>
<select name="program_id" class="form-control">
    @foreach($programs as $program)
        <option value="{{$program->id}}" {{$program->id == $courses->program_id ? 'selected' : ''}}>{{$program->name}}</option>
    @endforeach
</select>
</div>
{{Form::hidden('_method', 'PUT')}}
{{Form::submit('Update', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
    </div>
@endsection --}}