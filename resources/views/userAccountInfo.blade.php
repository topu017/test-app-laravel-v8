@include('templates/backend_header')
@include('templates/backend_sidebar')
<div class="row index_container">
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <div class="col-md-10 col-md-offset-1 index_wrapper">
        <h1>Your Account Information:</h1>
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
                <th>Upload your new photo</th>
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
                    <td>
                        <form action="{{ route('storePhoto', ['id' => $user->id]) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="user_photo" size="40" value="Upload your photo">
                            <input class="btn btn-primary button_submit" type="submit" name="submit" value="Submit your photo">
                        </form>
                    </td>
                </tr>
        </table>
        <a class="btn btn-inverse button_back pull-right" href="{{ url()->previous() }}">Back</a>
    </div>
</div>

