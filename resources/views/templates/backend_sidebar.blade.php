<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
        @if((Auth::user()->role == 'user'))
            <li>
                <a href="{{ route('showAccountInfo', ['id' => Auth::user()->id]) }}"><i class="fa fa-fw fa-align-justify"></i>Your Account Information</a>
            </li>
        @endif
    </ul>
</div>
<!-- /.navbar-collapse -->
</nav>