<nav class="navbar navbar-inverse">
        <ul class="nav navbar-nav">
      
            <li><a href="{{ URL::to('users') }}">View Users</a></li>
            <li><a href="{{ URL::to('books') }}">View Books</a></li>
            <li><a href="{{ URL::to('users/create') }}">Create User</a></li>
            <li><a href="{{ URL::to('books/create') }}">Create book</a></li>
        </ul>
    </nav>
    
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif