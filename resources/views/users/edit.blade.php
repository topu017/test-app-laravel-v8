@include('templates/backend_header')
@include('templates/backend_sidebar')

<div class="row form_edit_container">
    <div class="col-md-6 col-md-offset-3 form_edit_wrapper">
        <h1>Edit {{ $user->name }}:<a class="btn btn-link edit_index_link pull-right" href="{{ route('users.index') }}"><strong>Show All Users</strong></a></h1>
        @yield('edit_content')

        @if (count($errors) > 0)
            <!-- Form Error List -->
            <div class="alert alert-danger">
                <strong>Whoops!</strong> Something went wrong!.<br><br>

                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif

        <form class="form_edit" name="edit_form" action="{{ route('updateUser', ['id' => $user->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form_edit_div row">
                <label class="edit_form_label col-sm-2 col-form-label" for="name">User Name:</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="name" placeholder="Enter User Name" size="40" value="{{ $user->name }}" required>
                </div>
            </div>
            </br></br>
            <div class="form_edit_div row">
                <label class="edit_form_label col-sm-2 col-form-label" for="email">User Email:</label>
                <div class="col-sm-10">
                    <input class="form-control" type="email" name="email" placeholder="Enter User Email" size="40" value="{{ $user->email }}" required>
                </div>
            </div>
            </br></br>
            <div class="form_edit_div row">
                <label class="edit_form_label col-sm-2 col-form-label" for="phone_or_mobile">User Phone or Mobile:</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="phone_or_mobile" placeholder="Enter User Phone or Mobile" size="40" value="{{ $user->phone_or_mobile }}" required>
                </div>
            </div>
            </br></br>
            <div class="form_edit_div row">
                <label class="edit_form_label col-sm-2 col-form-label" for="username">Username:</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="username" placeholder="Enter Username" size="40" value="{{ $user->username }}" required>
                </div>
            </div>
            </br></br>
            <div class="form_edit_div row">
                <label class="edit_form_label col-sm-2 col-form-label" for="position">User Position:</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="position" placeholder="Enter User Position" size="40" value="{{ $user->position }}">
                </div>
            </div>
            </br></br>
            <div class="form_edit_div row">
                <label class="edit_form_label col-sm-2 col-form-label" for="user_photo">Upload User Photo:</label>
                <div class="col-sm-10">
                    <input type="file" name="user_photo" size="40"><img width="200px" height="200px" src="{{ Storage::url($user->user_photo) }}" alt="">
                </div>
            </div>
            <div class="form_edit_div row">
                <label class="edit_form_label col-sm-2 col-form-label" for="role">Role:</label>
                <div class="col-sm-10">
                    <select class="form-control" name="role">
                        <option value="{{ $user->role }}">Select Role</option>
                        <option value="admin">Admin</option>
                        <option value="manager">Manager</option>
                        <option value="user">User</option>
                    </select>
                </div>
            </div>
            </br></br>
            <div class="form_create_div row">
                <label class="edit_form_label col-sm-2 col-form-label" for="position">Password:</label>
                <div class="col-sm-10">
                    <input class="form-control" type="password" name="password" placeholder="Enter User Password" size="40">
                </div>
            </div>
            </br></br>

            <div class="form-group row mb-0">
                <div class="col-md-6 col-md-offset-4">
                    <input class="btn btn-primary button_submit" type="submit" name="submit" value="Update">
                </div>
            </div>
            <a class="btn btn-link pull-right" href="{{ route('users.index') }}">Back</a>
        </form>
    </div>
</div>

