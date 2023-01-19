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
                <h2>Add New Staff</h2>
                <form action="{{url('/')}}/addStaff" method="POST">
                    @csrf
                    <div class="row">

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
                        

                        </div>
                        <input type="submit" name="submit" value="Add" class="btn btn-success mt-3">

                        <a href="displayStaff" class="btn btn-success mt-3" role="button">Back</a>

                        
                </form>
            </div>
        </div>
    </div>

</body>

</html>