@extends('app')

@section('pagetitle')
    All Books 
@stop

@section('content')

@include('navigate')
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
                        <a class="btn btn-small btn-success" href="{{ URL::to('books/'.$book->id.'/edit') }}">Update</a>

                        {!! Form::open(['url' => 'books/'.$book->id, 'class' => 'pull-right']) !!}
                        {!! Form::hidden('_method', 'DELETE') !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-warning']) !!}
                        {!! Form::close() !!}

                    </td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
     
    <table class="table table-responsive table-hover table-bordered">
        <tr>
        <td>You take books:</td>
            <td>@foreach($userBooks as $userBook)
                <p>
                    {{ $userBook->title }}
                    <a href="{{ URL::route('return', ['book_id' => $userBook->id]) }}">Return book</a>
                </p>   
                @endforeach
            </td>
        </tr>
        <tr>
            <td>You can take</td>
                <td>
                    @foreach($freeBooks as $freeBook)
                    <p>
                        {{ $freeBook->title }}
                        <a href="{{ URL::route('take', ['book_id' => $freeBook->id]) }}">Take this book</a>
                    <p>
                @endforeach
                    </td>
                </tr>        
    </table>

@endsection

