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
        <div class="row g-3 my-2">
            <div class="col">
                <h3>Staff-Details</h3>
            </div>
            <div class="col">
                <a href="addStaff" class="btn btn-success btn-lg-3" role="button" style="margin-left: 450px;">Add Staff</a>
                <!-- <a href="dash" class="btn btn-success ml-3" role="button">Back</a> -->
            </div>
        </div>


            <!-- table -->
            {{-- <div class="containear">
          <div class="table">
            
               
                    <th>Name</th>
                
                    <th>Job Role</th>
                    <th>Joining Date</th>
                    <th>Contact</th>
                    <th>Address</th>
              
            
            
                @foreach ($staffs as $staff)
                <tr>
                    <td>{{$staff->name}}</td>
                    <td>{{$staff->jobrole}}</td>
                    <td>{{$staff->joiningdate}}</td>
                    <td>{{$staff->contact}}</td>
                    <td>{{$staff->address}}</td>
                </tr>
                @endforeach  

          
          </div>
        </div> --}}

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
                    <td><a href="displayStaff/{{$staff->staff_id}}">Delete</a></td>
                </tr>
                @endforeach  
            </tbody>
          </table>
        </div>

</body>

</html>