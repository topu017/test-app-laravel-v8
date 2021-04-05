@include('templates/backend_header')
@include('templates/backend_sidebar')

<div id="page-wrapper">
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row" id="main" >
            <div class="col-sm-12 col-md-12 well" id="content">
                <h1>Welcome {{ Auth::user()->name }}!</h1>
                <h4>You are logged in as a {{ Auth::user()->role }}!</h4>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>

