@include('templates/backend_header')
@include('templates/backend_sidebar')
<div class="row index_container">
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <div class="col-md-10 col-md-offset-1 index_wrapper">
        <h1>Your Departments Information:</h1>
        <table class="table table-bordered table_index">
            <tr>
                <th>User ID</th>
                <th>Department Name</th>
                <th>Your Position in Departments</th>
            </tr>
            @foreach($departments as $department)
            <tr>
                <td><h3>{{ $department->user_id }}</h3></td>
                <td><h3>{{ $department->department_name }}</h3></td>
                <td><h4>{{ $department->department_position }}</h4></td>
            </tr>
            @endforeach
        </table>
        <a class="btn btn-inverse button_back pull-right" href="{{ url()->previous() }}">Back</a>
    </div>
</div>

