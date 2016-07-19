@extends('app')

@section('pagetitle')
    Create book
@endsection

@section('content')

@include('navigate')

    @foreach($errors->all() as $error)
        <p class="alert alert-danger">{!!$error!!}</p>
    @endforeach

    {!! Form::open(['url'=> 'books']) !!}
    
    <div class="form-group">
        {!! Form::label('title', 'Title') !!}
        {!! Form::text('title', Input::old('title'), ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('author', 'Author') !!}
        {!! Form::text('author', Input::old('author'), ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('year', 'Year') !!}
        {!! Form::date('year', Input::old('year'), ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('genre', 'Genre') !!}
        {!! Form::text('genre', Input::old('genre'), ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('user_id', 'Id user with book') !!}
        {!! Form::text('user_id', Input::old('user_id'), ['class' => 'form-control']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::submit('Add', ['class' => 'btn btn-primary']) !!}
    </div>
    
    {!! Form::close() !!}
@endsection