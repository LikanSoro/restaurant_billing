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
            <div class="row g-3 my-2">
            <center>
                <div class="col-lg-6 mt-5">
                    <div class="card bg-white mb-3 text-center shadow p-3 mb-3 rounded h-50">
                        <div class="container-fluid mt-3">
                           <form action="{{ route('order_items') }}" method="POST">
                            
                               @csrf {{-- select table --}}
                                
                                {{-- select item --}}
                                <div class="form-group ">
                                    <label for="item" class="form-label">
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
                                    <input id="quantity" class="input-group" type="number" name="quantity" value="">
                                    </div>
                                </div>
                                    <div class="row">
                                        <div class="form-group text-right mt-5">
                                            <input type="hidden" name="order_id" value="{{$o_id}}">
                                            <input type="hidden" name="customer_id" value="{{$c_id}}">
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
        @if($order!= null)
        <div class="container-fluid m-auto">
        <div class="card col-6 center">
            <div class="row">
                
                    <div class="card bg-white mb-3 text-center shadow p-3 mb-3 rounded">
                       
                            <div class="row">
                                <div class="col-md">
                                    <h4>Order Details</h4>
                                    <h3>Customer Name: {{ $c_id }}</h3>
                                </div>
                            </div>
                                <div class="col-md">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Item Name</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                    
                                            </tr>
                                        </thead>
                                        <tbody id="table_data">
                                         @foreach ($order as $o )
                                                <tr>
                                               <td>{{$o->Items->i_name}}</td>
                                               
                                                <td>{{$o->quantity}}</td>
                                                <td>{{$o->price}}</td>
                                            </tr>
                                                @endforeach
                                        </tbody>
                                    </table>
                                    <h3>Total Price: {{$totalPrice}}</h3>
                            </div>
                            <hr>
                            
                            <div class="row">
                                <div class="col-md">
                                    <form action="{{ route('generate_bill') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="customer_id" value="{{$c_id}}">
                                        <input type="hidden" name="order_id" value="{{$o_id}}">
                                        <input type="hidden" name="totalPrice" value="{{$totalPrice}}">
                                        <button type="submit" class="btn btn-success" id="add" name="add" >Generate Bill</button>
                                    </form>
                                </div>
                        </div>
                    </div>
                </div>
            
        </div>
    </div>
@elseif ($order==null)
    
@endif
</div>
</body>
</html>
