@extends('app')

@section('pagetitle')
    All Books 
@stop

@section('content')

@if (Auth::guest())
            {{ 'You are not logged in' }}
@else
<nav class="navbar navbar-inverse">
<ul class="nav navbar-nav">
            <li><a href="{{ URL::to('users') }}">View Users</a></li>
            <li><a href="{{ URL::to('books') }}">View Books</a></li>
            <li><a href="{{ URL::to('users/create') }}">Create User</a></li>
            <li><a href="{{ URL::to('books/create') }}">Create book</a></li>
</ul>
</div>
@endif

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                
                
                <table class="table table-responsive table-hover table-bordered">
        <thead>
        <tr>
            <td>Id</td>
            <td>Title</td>
            <td>Author</td>
            <td>Year</td>
            <td>Genre</td>
            <td>Action</td>
        </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
                <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->year }}</td>
                    <td>{{ $book->genre }}</td>
                    <td width="235px">
                        <a class="btn btn-small btn-info" href="{{ URL::to('books/'.$book->id) }}">Details</a>
                        

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
                
            </div>
        </div>
    </div>  
</div>


           
           




@endsection
