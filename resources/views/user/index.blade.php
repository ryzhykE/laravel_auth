@extends('app')

@section('pagetitle')
    User list
@endsection

@section('content')

@include('navigate')
    <table class="table table-responsive table-hover table-bordered">
        <thead>
        <tr>
            <td>Id</td>
            <td>Firstname</td>
            <td>Lastname</td>
            <td>Email</td>
            <td>List</td>
            <td>Action</td>
        </tr>
        </thead>
        <tbody>

        @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->firstname }}</td>
                <td>{{ $user->lastname }}</td>
                <td>{{ $user->email }}</td>
                <td>  
                     
                    @foreach($user->books as $book)
                        <a class="btn btn-small" href="{{ URL::to('books/' . $book->id) }}">{{$book->title}}</a>
                            {!! Form::open(['url'=>'books/'. $book->id , 'style'=>'float:right;']) !!}
                            {!! Form::hidden('_method', 'PUT') !!}
                            {!! Form::hidden('_action', 'remove') !!}
                            {!! Form::button('return',['type' => 'submit']) !!}
                            {!! Form::close() !!}
                    @endforeach
                </td>
                <td width="225px">
                    <a class="btn btn-small btn-info" href="{{ URL::to('users/'.$user->id) }}">Show</a>
                    <a class="btn btn-small btn-success" href="{{ URL::to('users/'.$user->id.'/edit') }}">Update</a>
                    {!! Form::open(['url' => 'users/'.$user->id, 'class' => 'pull-right']) !!}
                    {!! Form::hidden('_method', 'DELETE') !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-warning']) !!}
                    {!! Form::close() !!}                   
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="right">
        {{ $users->render() }}
    </div>
@endsection




