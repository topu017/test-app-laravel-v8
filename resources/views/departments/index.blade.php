@include('templates/backend_header')
@include('templates/backend_sidebar')
<div class="row index_container">
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <div class="col-md-12 index_wrapper">
        <h1>All departments data:<a class="btn btn-link show_create_link pull-right" href="{{ route('departments.create') }}">Create New Department</a></h1>
    <table class="table table-bordered table_index">
        <tr>
            <th>ID</th>
            <th>User ID</th>
            <th>Department Name</th>
            <th>User Position</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Action</th>
        </tr>
        @foreach($departments as $department)
            <tr>
                <td><h3>{{ $department->id }}</h3></td>
                <td><h3>{{ $department->user_id }}</h3></td>
                <td><h3>{{ $department->department_name }}</h3></td>
                <td><h3>{{ $department->department_position }}</h3></td>
                <td><h4>{{ $department->created_at }}</h4></td>
                <td><h4>{{ $department->updated_at }}</h4></td>
                <td>
                    <a class="btn btn-info" href="{{ route('showDepartmentSingleData', ['id' => $department->id]) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('departments.edit', ['id' => $department->id]) }}">Edit</a>
                    <form action="{{ route('destroyDepartment', ['id' => $department->id]) }}" method="post">
                        {{ method_field('DELETE') }}
                        @csrf
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <nav aria-label="Page navigation example" class="pagination_link">
        {{ $departments->links() }}
    </nav>
    </div>
</div>

