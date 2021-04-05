@include('templates/backend_header')
@include('templates/backend_sidebar')
<div class="row index_container">
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <div class="col-md-12 index_wrapper">
        <h1>All users data:<a class="btn btn-link show_create_link pull-right" href="{{ route('users.create') }}">Create New User</a></h1>
    <table class="table table-bordered table_index">
        <tr>
            <th>User ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone/Mobile</th>
            <th>Username</th>
            <th>Position</th>
            <th>User Photo</th>
            <th>Role</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Action</th>
        </tr>
        @foreach($users as $user)
            <tr>
                <td><h3>{{ $user->id }}</h3></td>
                <td><h3>{{ $user->name }}</h3></td>
                <td><h4>{{ $user->email }}</h4></td>
                <td><h4>{{ $user->phone_or_mobile }}</h4></td>
                <td><h4>{{ $user->username }}</h4></td>
                <td><h4>{{ $user->position }}</h4></td>
                <td><img width="100px" height="100px" src="{{ Storage::url($user->user_photo) }}" alt=""></td>
                <td><h4>{{ $user->role }}</h4></td>
                <td><h4>{{ $user->created_at }}</h4></td>
                <td><h4>{{ $user->updated_at }}</h4></td>
                <td>
                    <a class="btn btn-info" href="{{ route('showUserSingleData', ['id' => $user->id]) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('users.edit', ['id' => $user->id]) }}">Edit</a>
                    <form action="{{ route('destroyUser', ['id' => $user->id]) }}" method="post">
                        {{ method_field('DELETE') }}
                        @csrf
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <nav aria-label="Page navigation example" class="pagination_link">
        {{ $users->links() }}
    </nav>
    </div>
</div>

