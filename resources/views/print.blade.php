<!DOCTYPE html>
<html lang="en">
<head>
  <title>display Order</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body onload="window.print()">
    {{--  --}}
    <div class="container-fluid">
       
        <div class="row ">
            <div style="" class="text-center my-5">
                <h3>Order id: @foreach($order as $o)
                    {{ $o->order_id }}
                    @endforeach
                </h3>
               @foreach($order as $or)
                <h4>Name:{{ $or->customers->c_name }}</h4>
                
              @endforeach
            </div>
        </div>

        <div class="row d-flex justify-content-center">
            <div class="col-6 text-center">
                
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Item Names</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($ordered_items as $item)
                        <tr>
                            <td>{{ $item->Items->i_name}}</td>
                            <td>{{ $item->quantity }}</td>
                            <td>{{ $item->price}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    
                  </table>
            </div>
        </div>
                  <div class="row">
                    <div class="text-center my-3">
                    @foreach ($order as $order )
                          
                  <h3>Total Price: {{ $order->totalPrice }}</h3>
                  <h4>Tax: {{ $order->tax }}%</h4>
                    <h4>Grand Total: {{ $order->totalPriceWithTax }}</h4>
                    @endforeach
            </div>
        </div>
        <div class="row">
            <div class="text-center my-5">
                <h5>---------Thank You---------</h5>
            </div>
        </div>
    </div>
    

</body>
</html>