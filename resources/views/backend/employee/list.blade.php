<div class="card-body">
    
        
            <div id="example1_wrapper" class="dataTable_wrapper dt boostrap4">
    <table id="example1" class="table table-bordered table-striped" id=userListing>
        <thead>
            <tr>
                <th  class="col-sm-1">No</th>
                <th class="col-sm-1">User Name</th>
                <th class="col-sm-2">User Email</th>
                <th class="col-sm-3">User Address</th>
                <th class="col-sm-1">User image</th>
                <th class="col-sm-1">User Group</th>
                <th class="col-1">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->email }}</td>
                <td >{{ $employee->address }}</td>
                <td><img src="../public/images/{{ ($employee->image) }}" height="45px" width="50px"></td>
                <td>{{ $employee->userGroup }}</td>
                <td style="float:right;border:none">
                    <form action="{{ route('employee.destroy',$employee->id) }}" method="POST" style="margin: 0%">
   
                        <a class="btn-sm btn-info" href="{{ route('employee.show',$employee->id) }}">View</a>
        
                        <a class="btn-sm btn-primary" href="{{ route('employee.edit',$employee->id) }}">Edit</a>
       
                        @csrf
                        @method('DELETE')
          
                        <button type="submit" class="btn-xs btn-danger" id="deleteUser">Delete</button>
                    </form>
                  
                </td>
            </tr>
                
            @endforeach
        </tbody>
    </table>
    {!! $employees->withQueryString()->links('pagination::bootstrap-5') !!}
            
        </div>
    
</div>
<!--<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>-->

  