<!DOCTYPE html>
<html lang="en">
<head>
  <title>display Order</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
     <!-- header -->
     @include('layouts.nav')
     <!-- Sidebar -->
     @include('layouts.sidedash')
         <!-- sidebar -->
<div class="container-fluid">
    <center>
    <div class="col-lg-6 mt-5">
        <h2>Display Orders</h2>
        <div class="card bg-white mb-3 text-center shadow p-3 mb-3 rounded h-50">
            <div class="container-fluid mt-3">
                <form action="" method="POST">
                    {{-- select date --}}
                    <div class="form-group ">
                        <label for="item" class="form-label">
                            <h4>Please Select Date</h4>
                        </label>
                        <div class="form-group column col-md-12">
                            <input type="date"> 
                        </div>
                    </div>
                    <div class="row" style="margin-left:30px ;">
                        <div class="form-group col-md-4 ml-5">
                                <input type="submit" name="submit" value="Show" class="btn btn-success mt-3" style="position:relative;margin-left:550px ;">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</center>
</div>
</body>
</html>
