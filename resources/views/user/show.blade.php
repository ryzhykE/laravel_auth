@extends('app')

@section('pagetitle')
    Details
@endsection

@section('content')

@include('navigate')

    {!! Form::model($user) !!}
    
    <div class="form-group">
        {!! Form::label('firstname', 'Firstname') !!}
        {!! Form::text('firstname', null, ['class' => 'form-control', 'readonly' => 'true']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('lastname', 'Lastname') !!}
        {!! Form::text('lastname', null, ['class' => 'form-control', 'readonly' => 'true']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('email', 'Email') !!}
        {!! Form::text('email', null, ['class' => 'form-control', 'readonly' => 'true']) !!}
    </div>
    
    {!! Form::close() !!}

@endsection