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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
        //get form data on submit and display in table_data on click of add button
        $("form").submit(function(event){
    
            event.preventDefault();
            console.log("hello");
           $('#add').click(function(event){
    
    
                var table_id = $('#table_id').val();
                var Item_id = $('#item_id').val();
                var quantity = $('#quantity').val();
                
                
                var item_name= Item_id;
                var price = Item_id;
                var item_total = $('#quantity').val() * price;
                //price from all items is to be added and displayed in total
            });
        });
       
        </script>

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
                                        <select class="form-select" id="table_id" name="table_id" required>
                                            <option value="">Select Table id</option>
                                            @foreach ($table as $t)
                                            <option value="{{$t->table_id}}">{{$t->table_id}}</option>
                                            @endforeach
                                           
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group ">
                                   <div class="form-group ">
                                    <label for="item" class="form-label">
                                        <h4>Select Server</h4>
                                    </label>
                                    <div class="form-group column col-md-12">
                                        <select class="form-select" id="s_name" name="server_name">
                                            <option value="">Select server</option>
                                        @foreach ($staff as $s)
                                            <option value="{{$s->staff_id}}">{{$s->name}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                
                                {{-- select item --}}
                                <div class="form-group ">
                                    <label for="item" class="form-label">
                                        <h4>Please Select Items</h4>
                                    </label>
                                    <div class="form-group column col-md-12">
                                        <select class="form-select" id="item_id" name="Item_name" required>
                                            <option value="">Select Item</option>
                                            @foreach ($item as $s)
                                            <option value="{{$s->item_id}}">{{$s->i_name}} ---> {{$s->price}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="item" class="form-label">
                                        <h4>Quantity</h4>
                                    </label>
                                    <div class="form-group column col-md-12">
                                    <input id="quantity" class="input-group" type="number" name="quantity" value="">
                                    </div>
                                </div>
                                
                                    <div class="row" style="margin-left:30px ;">
                                        <div class="form-group col-md-4 ml-5">
                                           <button type="submit" class="btn btn-success" id="add" name="add">Add</button>
                                     </div>
                                </div>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </center>
        </div>
        
        <div class="card col-3">
            <div class="row">
                <div class="col-md">
                    <div class="card bg-white mb-3 text-center shadow p-3 mb-3 rounded">
                        <div class="container-fluid mt-3">
                            <div class="row">
                                <div class="col-md">
                                    <h4>Order Details</h4>
                                </div>
                                <div class="col-md">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Table No</th>
                                                <th>Item Name</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody id="table_data">
                                            <tr>
                                               
                                            </tr>
                                        </tbody>
                                    </table>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    

   
                    
   
    
</body>

</html>