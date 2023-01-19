<!DOCTYPE html>
<html lang="en">

<head>
    <title>Place Order</title>
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
                    <div class="col-md">
                        <a href="alltimesorder" class="btn btn-success" role="button" style="margin-left: 10rem;">All Orders</a>
                    </div>
                    <div class="col-md">
                        <a href="displayTodaysPaidOrder" class="btn btn-success " role="button" style="margin-left: 20rem;">Today's Order</a>
                    </div>
                    {{-- <div class="col-md">
                        <a href="orderselecttable.php" class="btn btn-success" role="button" style="margin-left: 110px;">Add Order</a>
                    </div> --}}
                </div>
            <center>
                <div class="col-lg-6 mt-5">
                    <div class="card bg-white mb-3 text-center shadow p-3 mb-3 rounded h-50">
                        <div class="container-fluid mt-3">
                            <form action="" method="POST">
                                {{-- select table --}}
                                <div class="form-group ">
                                    <label for="item" class="form-label">
                                        <h4>Please Select Table No </h4>
                                    </label>
                                    <div class="form-group column col-md-12">
                                        <select class="form-select" name="table_id" required>
                                            <option value="">Select Table</option>
                                            @foreach ($table_id as $table)
                                            <option value="{{$table->table_id}}">{{$table->table_id}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                {{-- select item --}}
                                <div class="form-group ">
                                    <label for="item" class="form-label">
                                        <h4>Please Select Items</h4>
                                    </label>
                                    <div class="form-group column col-md-12">
                                        <select class="form-select" name="Item_name" required>
                                        

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    {{-- <label for="item" class="form-label">
                                        <h4>Please Select Item 2</h4>
                                    </label> --}}
                                    <div class="form-group column col-md-12">
                                        <select class="form-select" name="Item_name">
                                        

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    {{-- <label for="item" class="form-label">
                                        <h4>Please Select Item 3</h4>
                                    </label> --}}
                                    <div class="form-group column col-md-12">
                                        <select class="form-select" name="Item_name">
                                        

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    {{-- <label for="item" class="form-label">
                                        <h4>Please Select Item 4</h4>
                                    </label> --}}
                                    <div class="form-group column col-md-12">
                                        <select class="form-select" name="Item_name">
                                        

                                        </select>
                                    </div>
                                </div>
                                {{-- select quantity --}}
                                <div class="form-group column col-md-12 mt-3">
                                    {{-- <label for="catagory" class="form-label">
                                        <h4>Select Quantity</h4>
                                    </label>
                                    <input type="text" name="sq" value="" style="width:33rem ;"> --}}

                                    <div class="row" style="margin-left:30px ;">
                                        <div class="form-group col-md-4 ml-5">
                                            <input type="submit" name="submit" value="Place Order" class="btn btn-success mt-3" style="position:relative;margin-left:550px ;">
                                     </div>
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