@extends('app')

@section('pagetitle')
    Create user
@endsection

@section('content')

@include('navigate')
    
    @foreach($errors->all() as $error)
        <p class="alert alert-danger">{!!$error!!}</p>
    @endforeach

    {!! Form::open(['url'=> 'users']) !!}
    
    <div class="form-group">
        {!! Form::label('firstname', 'Firstname') !!}
        {!! Form::text('firstname', Input::old('firstname'), ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('lastname', 'lastname') !!}
        {!! Form::text('lastname', Input::old('lastname'), ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('email', 'Email') !!}
        {!! Form::text('email', Input::old('email'), ['class' => 'form-control']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::submit('Create', ['class' => 'btn btn-primary']) !!}
    </div>
    
    {!! Form::close() !!}
@endsection