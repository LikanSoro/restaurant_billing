<!DOCTYPE html>
<html lang="en">

<head>
    <title>Menu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        * {
            box-sizing: border-box;
        }

        /* Create three unequal columns that floats next to each other */
        .column {
            float: left;
            padding: 10px;
            height: 90px;
            /* Should be removed. Only for demonstration */
        }
    </style>
</head>

<body>

    <!-- header -->
    @include('layouts.nav')
     <!-- Sidebar -->
     @include('layouts.sidedash')
        <!-- sidebar -->
        <div class="container-fluid">
        <div class="row mx-5 my-4">
                   <center> <div class="col ">
                   <h1 style="font-family: cursive">Oreders</h1>
                    </div></center>
    
        </div>

        <center>

            <div class="col-lg-6 mt-4">
                <div class="card bg-white mb-3 text-center shadow p-3 mb-3 rounded h-50">
                    <div class="container-fluid mt-3">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">Order Id</th>
                                <th scope="col">Customer Id</th>
                                <th scope="col">Table Id</th>
                                <th scope="col">Staff Id</th>
                                <th scope="col">Total Price</th>
                                <th scope="col">Price With Tax</th>
                                <th scope="col">Payment Status</th>
                                <th scope="col">Date</th>
                                <th scope="col">action</th>
                              </tr>
                            </thead>
                
                            <tbody>
                              
                                @foreach ($order as $order)
                                <tr>
                                    <td>{{$order->order_id}}</td>
                                    <td>{{$order->customer_id}}</td>
                                    <td>{{$order->table_id}}</td>
                                    <td>{{$order->staff_id}}</td>
                                    <td>{{$order->total_price}}</td>
                                    <td>{{$order->totalPriceWithTax}}</td>
                                    <td>@if($order->payment_status==0)
                                        <span class="">Not Paid</span>
                                        @else
                                        <span class="btn-success">Paid</span>
                                        @endif
                                    </td>
                                    <td>{{$order->updated_at}}</td>
                                    <td><a class="btn btn-warning" href="generate_bill/{{$order->order_id}}">Bill Paid</a></td>
                                    <td><a class="btn btn-success" href="generate_bill/{{$order->order_id}}">Print Invoice</a></td>
                                        
                                    {{-- <td><a href="{{route('delete/$item->item_id')}}">Delete</a></td> --}}
                                </tr>
                                @endforeach  
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </center>
    </div>

</body>

</html>