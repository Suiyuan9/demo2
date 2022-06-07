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
                  <li class="breadcrumb-item"><a href="{{ route('employee.index') }}">User Listing</a></li>
                  <li class="breadcrumb-item active">Show {{$employee->id}}</li>
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
                  
                  @if (isset($employee))
                  <h3 class="card-title">Edit User :{{ $employee->id }}</h3>
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
                          
                            
                             <input type="name" name="name" class="form-control" id="exampleInputName" placeholder="Enter name" value="{{ $employee->name }}" required autocomplete="name" autofocus disabled="disabled" style="background-color: white;">
                             
                           </div>
                           
                           <div class="col-md-4">
                             <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"  id="exampleInputPassword1" placeholder="Password" value="{{ $employee->password }}" style="background-color: white;" required autocomplete="current-password" disabled="disabled">
                            
                         </div>
                         
                         <div class="col-md-4">
                           <input id="password-confirm" type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password" style="background-color: white;" value="{{ $employee->password }}" disabled="disabled">
                          
                       </div>
                             
    
                            
                           
                            
                      
                        </div>
                      </div>
                    
                    <!--end input-->
    
    
                    <div class="form-group">
                      <div class="row  justify-content-between" > 
                        <div class="col-md-8">
                          <label for="exampleInputEmail1">Email address</label>
                        </div>
                      
                      <div class="col-md-4">
                        <label >Contact</label>
                    </div>
                      </div>
    
    
                    
                      <!--password-->
                      <div class="row  mb-3 justify-content-between" > 
                        <div class="col-md-8">
                          <input type="email" name="email" class="form-control " style="background-color: white;" id="exampleInputEmail1" placeholder="Enter email" value="{{ $employee->email }}" required autocomplete="email" disabled="disabled">
                         
                        </div>
                
                      <div class="col-md-4">
                         <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                          </div>
                          <input type="text"  style="background-color: white;" name="contact" class="form-control" data-inputmask='"mask": "(999) 9999-9999"' data-mask value="{{ $employee->contact }}" disabled="disabled">
                        </div>
                        <!---->  
                    </div>
                      </div>
    
                    </div>
    
    
                    <!--group-->
                    <div class="form-group">
                      <div class="row  justify-content-between" > 
                        <div class="col-md-12">
                          <label>User Address</label>
                        </div>
                      </div>
                      
    
                       <!--input-->
                      
                        <div class="row  justify-content-between" > 
                          <div class="col-md-12">
                            <input type="address" name="address" style="background-color: white;" class="form-control " id="address" placeholder="Enter address" value="{{ $employee->address }}" required autocomplete="address" disabled="disabled">
                            
                          </div>
                          <!---->
                        </div>
                        </div>
    
                        <!--group-->
                    <div class="form-group">
                      <div class="row  justify-content-between" > 
                        <div class="col-md-4">
                          <label>Calender</label>
                        </div>
    
                        <div class="col-md-4">
                          <label></label>
                        </div>
    
                        
                        <div class="col-md-4">
                          <label >User Group</label>
                        </div>
    
                      </div>
                     
    
                       <!--input-->
                      
                        <div class="row  mb-3 justify-content-between" > 
                          <div class="col-md-4">
                            <div class="input-group">
                              <button type="button" class="btn btn-default float-right" id="daterange-btn">
                                <i class="fa fa-calendar"></i> Date range picker
                                <i class="fas fa-caret-down"></i>
                              </button>
                            </div>
                          </div>
                          
                          <div class="col-md-4">
                          <div id="reportrange">
                            <span ></span>
                          </div>
                          </div>
    
                          <div class="col-md-4">
                            <select class="form-control " name="userGroup" style="width: 100%;background-color: white"  disabled="disabled" >
                         
                              <option value="{{ $employee->userGroup }}">{{ $employee->userGroup }}</option>
 
                            
                          </select>
                      </div>
      
    
                        </div>
                        </div>
    
                        <!-- image-->
                        <div class="form-group">
                          <div class="row " >
                            <div class="col-md-12">
                              <label>Image</label>
                            </div>
                           </div>
                        
    
                       
    
                        
                          <div class="row " >
                            <div class="col-md-12">
                              <img src="../public/images/{{ ($employee->image) }}" height="45px" width="50px"></td>
                            </div>
                           </div>
                        </div>
               
    
                    
    
    
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                  
                     <div class="row " >
                      <div class="col-md-11">
                      </div>
                      <a class="btn  btn-default btn-lg " style="margin-right:1%"   href="{{ route('employee.index') }}">Back</a>       
                    
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