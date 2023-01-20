<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add Customer</title>
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
    <div class="container mt-3">
        <h2>Add Customer</h2>
        <form action="{{route('Customer')}}" method="post">
            @csrf
            <div class="row">
                <div class="mb-3 mt-3">
                    <label for="name" class="form-label">customer Name:</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter name" name="c_name">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Customer Number</label>
                    <input type="text" class="form-control" id="description" placeholder="Enter description" name="number">
                </div>
                <input type="hidden" value="" name="Item_catagory">

                {{-- <div class="mb-3">
                    <label for="status" class="form-label">Status:</label>
                    <select class="form-select" name="status">
                        <option>Available</option>
                        <option>Not Available</option>
                    </select>
                </div> --}}
            </div>
            <input type="submit" name="submit" value="Next" class="btn btn-success">
           
        </form>
    </div></div></div>

</body>

</html>