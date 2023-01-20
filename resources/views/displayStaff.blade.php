<!DOCTYPE html>
<html lang="en">

<head>
    <title>Staff Details</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <!-- header -->
    @include('layouts.nav')
    <!-- Sidebar -->
    @include('layouts.sidedash')
    
        <!-- sidebar -->
        <div class="container-fluid">
        
          <div class="row g-2 my-3">
            <center>
            <div class="col">
                <h1>Staff-Details</h1>
            </div>
         
            <div class="mt-4">
                <a href="addStaff" class="btn btn-info btn-lg-5" >Add Staff</a>
            </div>
          </center>
        </div> 
        
        
        <center>

          <div class="col-lg-10 mt-4">
              <div class="card bg-white mb-3 text-center shadow p-3 mb-3 rounded h-50">
                  <div class="container-fluid mt-3">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Job Role</th>
                <th scope="col">Joining Date</th>
                <th scope="col">Contact No</th>
                <th scope="col">Address</th>
                <th style="margin-left:2rem;" scope="col">Action</th>


              </tr>
            </thead>

            <tbody>
              
                @foreach ($staffs as $staff)
                <tr>
                    <td>{{$staff->name}}</td>
                    <td>{{$staff->job_role}}</td>
                    <td>{{$staff->joining_date}}</td>
                    <td>{{$staff->contact}}</td>
                    <td>{{$staff->address}}</td>
                    {{-- <td><a href="displayStaff/{{$staff->staff_id}}">Update</a></td> --}}
                    <td><a class="btn btn-danger" href="displayStaff/{{$staff->staff_id}}">Delete</a></td>
                    <td><a class="btn btn-info" href="editStaff/{{$staff->staff_id}}">Edit</a></td>
  
                </tr>
                @endforeach  
            </tbody>
          </table>
        </div>
        </div>
        </div>

</body>

</html>