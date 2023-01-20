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
        <div class="modal fade" id="editStaff" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Edit Staff</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form action="{{ route('editStaff'.$id) }}" method="POST">
                    @csrf
                    <div class="form-group ">
                        <label for="name" class="">Name:</label>
                        <input style="font-size: 18px;" class="input-group input-group-sm p-1" type="text" name="name" class="form-control" id="" required placeholder="Enter staff name">
                    </div><br>
                    
                    <div class="mb-3">
                        <label for="jobRole" class="form-label">Job role:</label>
                        <textarea name="jobrole" class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                    </div><br>

                    <div class="mb-3">
                    <label for="joiningdate" class="form-label">Joining Date:</label>
                    <input type="date" name="joiningdate">
                </div><br>

                    <div class="form-group ">
                        <label for="mobilenumber" class="">Contact:</label>
                        <input style="font-size: 18px;" class="input-group input-group-sm p-1" type="number" name="contact" class="form-control" id="" required placeholder="Enter Mobile Number">
                    </div>
                    <br>
                    
                    <div class="form-group">
                        <label for="Address" class="">Address:</label>
                        <textarea name="address" class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                    </div>
                    <br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                      </div>
                    </form>
                </div>
                

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
                    <td><a href="editStaff/{{$staff->staff_id}}">Edit</a></td>

                    
                </tr>
                @endforeach  
            </tbody>
          </table>
        </div>

</body>

</html>