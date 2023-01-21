<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add Staff</title>
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
    <!-- /header -->
    <!-- Sidebar -->
    @include('layouts.sidedash')
        <!-- sidebar -->
        <div class="container-fluid">
            <div class="container mt-3">
                <h2>Edit Staff Details</h2>

                <center>
                    <div class="col-lg-6 mt-5">
                        <div class="card bg-white mb-3 shadow p-3 mb-3 rounded h-50">
                            <div class="container-fluid mt-3">
                <form action="{{ route('editStaff') }}" method="POST">
                    @csrf
                    <div class="row">

                        <div class="form-group ">
                            <label for="name" class="">Name:</label>
                            <input style="font-size: 18px;" value="{{$staff->name}}" class="input-group input-group-sm p-1" type="text" name="s_name" class="form-control" >
                        </div><br>
                        
                        <div class="mb-3">
                            <label for="jobRole" class="form-label">Job role:</label>
                            <textarea name="jobrole" value=""class="form-control"  rows="2">{{ $staff->job_role }}</textarea>
                        </div><br>

                        <div class="form-group ">
                            <label for="mobilenumber" class="">Contact:</label>
                            <input style="font-size: 18px;" value="{{ $staff->contact }}" class="input-group input-group-sm p-1" type="number" name="contact" class="form-control">
                        </div>
                        <br>
                        
                        <div class="form-group">
                            <label for="Address" class="">Address:</label>
                            <textarea name="address" value="" class="form-control" rows="2">{{ $staff->address }}</textarea>
                        </div>
                        <br>
                        

                        </div>
                        <input type="hidden" name="id" value="{{ $staff->staff_id }}">
                        <input type="submit" name="submit" value="Update" class="btn btn-success mt-3">
                </form>
            </div>
        </div>
    </div>

</body>

</html>