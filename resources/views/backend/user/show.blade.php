@extends('backend.layouts.heade1')

@section('content')

@if (Session::has('errors'))
<div class="alert alert-danger">
  {{ Session::get('errors') }}
</div>
  
@endif
    

<div class="content-wrapper" style="margin-left: 0">
    <!-- Content Header (Page header) -->
    <section class="content-header" >
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h1>Show User <span style="font-size:18px;color:#869099">P000005</span></h1>
          </div>
          
        </div>
        <div class="row">
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-left">
                  <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                  <li class="breadcrumb-item"><a href="{{ route('user.index') }}">User Listing</a></li>
                  <li class="breadcrumb-item active">Show {{$user->id}}</li>
                </ol>
              </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    
    <section class="content">
        <div class="container">
            
            
    
          
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- jquery validation -->
              <div class="card card-primary">
                <div class="card-header">
                  
                  @if (isset($user))
                  <h3 class="card-title">Edit User :{{ $user->id }}</h3>
                  @else <h3 class="card-title">Add New User</h3>
                  @endif
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form id="quickForm">
                  <div class="card-body">
             
                    <div class="form-group">
                      <div class="row  justify-content-between" > 
                        <div class="col-md-4">
                        <label >User Name<span>*</span></label>
                        </div>
                        <div class="col-md-4">
                          <label for="exampleInputPassword1">Password</label>
                      </div>
                      
                      <div class="col-md-4">
                        <label for="password-confirm">Confirm Password</label>
                    </div>
                      </div>
                    
                    
                      <!--input-->
                      
                        <div class="row  mb-3 justify-content-between" >
                        
                          <div class="col-md-4">
                          
                            
                             <input type="name" name="name" class="form-control" id="exampleInputName" placeholder="Enter name" value="{{ $user->name }}" required autocomplete="name" autofocus disabled="disabled" style="background-color: white;">
                             
                           </div>
                           
                           <div class="col-md-4">
                             <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"  id="exampleInputPassword1" placeholder="Password" value="{{ $user->password }}" style="background-color: white;" required autocomplete="current-password" disabled="disabled">
                            
                         </div>
                         
                         <div class="col-md-4">
                           <input id="password-confirm" type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password" style="background-color: white;" value="{{ $user->password }}" disabled="disabled">
                          
                       </div>
                             
    
                            
                           
                            
                      
                        </div>
                      </div>
                    
                    <!--end input-->
    
    
                   
    
                        <!-- image-->
                        <div class="form-group">
                          <div class="row " >
                            <div class="col-md-12">
                              <label>Image</label>
                            </div>
                           </div>
                        
    
                       
    
                        
                          <div class="row " >
                            <div class="col-md-12">
                              <img src="../public/images/{{ ($user->image) }}" height="45px" width="50px"></td>
                            </div>
                           </div>
                        </div>
               
    
                    
    
    
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                  
                     <div class="row " >
                      <div class="col-md-11">
                      </div>
                      <a class="btn  btn-default btn-lg " style="margin-right:1%"   href="{{ route('user.index') }}">Back</a>       
                    
                     </div>
                  </div>
                </form>
              </div>
              <!-- /.card -->
              </div>
            <!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">
    
            </div>
            <!--/.col (right) -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>


   

</div>
@include('backend.footerJS.create')



@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

  @include('sweetalert::alert')


@endsection