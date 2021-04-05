@include('templates/backend_header')
@include('templates/backend_sidebar')

<div class="row form_edit_container">
    <div class="col-md-6 col-md-offset-3 form_edit_wrapper">
        <h1>Edit {{ $department->department_name }}:<a class="btn btn-link edit_index_link pull-right" href="{{ route('departments.index') }}"><strong>Show All Departments</strong></a></h1>
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

        <form class="form_edit" name="edit_form" action="{{ route('updateDepartment', ['id' => $department->id]) }}" method="post">
            @csrf
            <div class="form_edit_div row">
                <label class="edit_form_label col-sm-2 col-form-label" for="user_id">User ID:</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="user_id" placeholder="Enter User ID" size="40" value="{{ $department->user_id }}" required>
                </div>
            </div>
            </br></br>
            <div class="form_edit_div row">
                <label class="edit_form_label col-sm-2 col-form-label" for="department_name">Department Name:</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="department_name" placeholder="Enter Department Name" size="40" value="{{ $department->department_name }}" required>
                </div>
            </div>
            </br></br>
            <div class="form_edit_div row">
                <label class="edit_form_label col-sm-2 col-form-label" for="department_position">User Position in Department:</label>
                <div class="col-sm-10">
                    @foreach($users as $user)
                    <input class="form-control" type="text" name="department_position" placeholder="Enter User Position in Department" size="40" value="{{ $user->position }}" readonly="readonly">
                    @endforeach
                </div>
            </div>
            </br></br>

            <div class="form-group row mb-0">
                <div class="col-md-6 col-md-offset-4">
                    <input class="btn btn-primary button_submit" type="submit" name="submit" value="Update">
                </div>
            </div>
            <a class="btn btn-link pull-right" href="{{ route('departments.index') }}">Back</a>
        </form>
    </div>
</div>

