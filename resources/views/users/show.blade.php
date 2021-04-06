@include('templates/backend_header')
@include('templates/backend_sidebar')

<div class="row index_container">
    <div class="col-md-12 index_wrapper">
        <h1>Student: {{ $user->name }}<a class="btn btn-link show_create_link pull-right" href="{{ route('users.create') }}">Create New User</a></h1>
        <table class="table table-bordered table_show">
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
            </tr>
                <tr>
                    <td><h3>{{ $user->id }}</h3></td>
                    <td><h3>{{ $user->name }}</h3></td>
                    <td><h4>{{ $user->email }}</h4></td>
                    <td><h4>{{ $user->phone_or_mobile }}</h4></td>
                    <td><h4>{{ $user->username }}</h4></td>
                    <td><h4>{{ $user->position }}</h4></td>
                    <td><img width="100px" height="100px" src="{{ Storage::url($user->user_photo) }}" alt=""></td>
                    <td><h4>{{ $user->role }}</h4></td>
                    <td><h4>{{ $user->created_at->format('d.m.Y, H:i:s') }}</h4></td>
                    <td><h4>{{ $user->updated_at->format('d.m.Y, H:i:s') }}</h4></td>

                </tr>
        </table>
        <a class="btn btn-inverse button_back pull-right" href="{{ route('users.index') }}">Back</a>
    </div>
</div>


