@include('templates/backend_header')
@include('templates/backend_sidebar')
<div class="row create_container">
    <div class="col-md-6 col-md-offset-3 create_wrapper">
        <h1>Create Department:<a class="btn btn-link create_index_link pull-right" href="{{ route('departments.index') }}"><strong>Show All Departments</strong></a></h1>
        <br>
        @yield('create_content')

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

        <form class="form_create" name="create_form" action="{{ route('storeDepartment') }}" method="post">
            @csrf
            <div class="form_create_div row">
                <label class="edit_form_label col-sm-2 col-form-label" for="user_id">User ID:</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="user_id" placeholder="Enter User ID" size="40" required>
                </div>
            </div>
            </br></br>
            <div class="form_create_div row">
                <label class="edit_form_label col-sm-2 col-form-label" for="department_name">Department Name:</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="department_name" placeholder="Enter Department Name" size="40" required>
                </div>
            </div>
            </br></br>



            <div class="form-group row mb-0">
                <div class="col-md-6 col-md-offset-4">
                    <input class="btn btn-primary button_submit" type="submit" name="submit" value="Save">
                </div>
            </div>
            <a class="btn btn-link pull-right" href="{{ route('departments.index') }}">Back</a>
        </form>
    </div>
</div>

<script>
    ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
        console.error( error );
    });
</script>
