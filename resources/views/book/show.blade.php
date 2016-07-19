@extends('app')

@section('pagetitle')
     Details
@endsection

@section('content')


    {!! Form::model($book) !!}
    
    <div class="form-group">
        {!! Form::label('title','Title') !!}
        {!! Form::text('title',null,['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('author','Author') !!}
        {!! Form::text('author',null,['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('year','Year') !!}
        {!! Form::number('year',null,['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('genre','Genre') !!}
        {!! Form::text('genre',null,['class' => 'form-control']) !!}
    </div>
    
    {!! Form::close() !!}
@endsection