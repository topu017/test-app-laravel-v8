@include('templates/backend_header')
@include('templates/backend_sidebar')

<div class="row index_container">
    <div class="col-md-12 index_wrapper">
        <h1>Department: {{ $department->department_name }}<a class="btn btn-link show_create_link pull-right" href="{{ route('departments.create') }}">Create New Department</a></h1>
        <table class="table table-bordered table_show">
            <tr>
                <th>ID</th>
                <th>User ID</th>
                <th>Department Name</th>
                <th>User Position</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
                <tr>
                    <td><h3>{{ $department->id }}</h3></td>
                    <td><h3>{{ $department->user_id }}</h3></td>
                    <td><h3>{{ $department->department_name }}</h3></td>
                    <td><h3>{{ $department->department_position }}</h3></td>
                    <td><h4>{{ $department->created_at->format('d.m.Y, H:i:s') }}</h4></td>
                    <td><h4>{{ $department->updated_at->format('d.m.Y, H:i:s') }}</h4></td>
                </tr>
        </table>
        <a class="btn btn-inverse button_back pull-right" href="{{ route('departments.index') }}">Back</a>
    </div>
</div>


