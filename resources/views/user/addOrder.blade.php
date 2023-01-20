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
            
            <center>
                <div class="col-lg-6 mt-5">
                    <div class="card bg-white mb-3 shadow p-3 mb-3 rounded h-50">
                        <div class="container-fluid mt-3">
                           <form action="{{ route('store_order') }}" method="POST">
                               @csrf {{-- select table --}}
                                <div class="form-group ">
                                    <label for="item2" class="form-label">
                                        <h4>Please Select Table No </h4>
                                    </label>
                                    
                                    <div class="form-group column col-md-12">
                                        <select class="form-select" id="item2" name="table_id" required>
                                            <option value="">Select Table id</option>
                                            @foreach ($table as $t)
                                            <option value="{{$t->table_id}}">{{$t->table_id}}</option>
                                            @endforeach
                                           
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group ">
                                   <div class="form-group ">
                                    <label for="item1" class="form-label">
                                        <h4>Select Server</h4>
                                    </label>
                                    <div class="form-group column col-md-12">
                                        <select class="form-select" id="item1" name="server_name">
                                            <option value="">Select server</option>
                                        @foreach ($staff as $s)
                                            <option value="{{$s->staff_id}}">{{$s->name}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                
                                {{-- select item --}}
                                <div class="form-group ">
                                    <label for="item_id" class="form-label">
                                        <h4>Please Select Items</h4>
                                    </label>
                                    <div class="form-group column col-md-12">
                                        <select class="form-select" id="item_id" name="item_id" required>
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
                                    <input id="item" class="form-control" type="number" name="quantity" >
                                    </div>
                                </div>
                                
                                    <div class="row mt-5">
                                        <div class="form-group">
                                            <input type="hidden" name="customer_id" value="{{ $customer_id }}">
                                           <button type="submit" class="btn btn-primary" id="add" name="add">Next -></button>
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