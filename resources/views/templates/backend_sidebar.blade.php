<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">

        <li>
            <a href="{{ route('showAccountInfo', ['id' => Auth::user()->id]) }}"><i class="fa fa-fw fa-align-justify"></i>Your Account Information</a>
        </li>
        <li>
            <a href="{{ route('showDepartment', ['id' => Auth::user()->id]) }}"><i class="fa fa-fw fa-sort-alpha-desc"></i>Your Departments Information</a>
        </li>
        @if(Auth::user()->role == 'admin' || Auth::user()->role == 'manager')
            <li>
                <a href="{{ url('users/index') }}"><i class="fa fa-fw fa-user"></i>All Users</a>
            </li>
            <li>
                <a href="{{ url('departments/index') }}"><i class="fa fa-fw fa-sort-alpha-desc"></i>All Departments</a>
            </li>
        @endif
    </ul>
</div>
<!-- /.navbar-collapse -->
</nav>