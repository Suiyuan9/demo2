@extends('backend.layouts.heade')

@section('content')
<!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">User Listing <span style="font-size:18px;color:#869099">P000002</span></h1>
          </div><!-- /.col -->
          <div class="col-sm-7">
            <ol class="breadcrumb float-sm-left">
              <!--  if(app('router')->getRoutes()->match(app('request')->create(URL::previous()))->getName()=="home")
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v2</li>

                elseif (app('router')->getRoutes()->match(app('request')->create(URL::previous()))->getName()=="index3")
              <li class="breadcrumb-item"><a href="{{ route('index3') }}">Dashboard v3</a></li>
              <li class="breadcrumb-item active">Dashboard v2</li>
                else
                <li class="breadcrumb-item active">Dashboard v2</li>
              endif-->      
              {{ Breadcrumbs::render() }}
            </ol>
            
          </div><!-- /.col -->
          
        </div><!-- /.row -->
        <form method="GET" >
        <div class="row mb-2">
        <div class="col-sm-3">
          <input class="form-control" type="text" name="search"  value="{{ request()->get('search') }}"  placeholder="Search..." aria-label="Search" 
          aria-describedby="button-addon2">
        </div>
        <div class="col-sm-1">
          <button class="btn btn-primary" type="submit" id="button-addon2">Search</button>
        </div>
        <div class="col-sm-8">
          <h1 class="pull-right"><a class="btn btn-primary float-sm-right" id="btn-submit" style="" href="{{ route('employee.create') }}">Add New Record</a></h1>
          </div>
      </div>
        </form>
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content-header -->
        
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row ">
          <div class="col-sm-12">
            <div class="card">
            @include('backend.employee.list')
          </div>
        </div>
      </div>
      </div>
    </section>
    
    <!-- /.content -->
  
  <!-- /.content-wrapper -->



@include('sweetalert::alert')
<!-- REQUIRED SCRIPTS -->
@include('backend.footerJS.footer2')

@endsection



</body>
</html>
