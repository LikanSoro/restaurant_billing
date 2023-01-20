<!DOCTYPE html>
<html lang="en">
<head>
  <title>display Order</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body onload="window.print()">>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h3>Order Details</h3>
               @foreach($order as $or)
                <h4>{{ $or->customers->c_name }}</h4>
                <h5>{{ $or->customers->c_phone}}</h5>
              @endforeach
            </div>
        </div>

        <div class="row">
            <div class="col">
                {{-- <h5>Order ID: {{ $order->order_id }}</h5> --}}
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Item Names</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($order as $order_item)
                        
                            @foreach ($order_item->ordered_items as $item)
                            <tr>
                            {{-- </td>{{ $item->Item->i_name }}</td> --}}
                            
                            <td>{{ $item->item_id }}</td>
                            <td>{{ $item->quantity }}</td>
                            <td>{{ $item->price }}</td>
                        </tr>
                            @endforeach
                            {{-- <td>{{ $order_item->quantity }}</td>
                            <td>{{ $order_item->item->price }}</td> --}}
                        
                        @endforeach
                    </tbody>
                    
                  </table>
                  @foreach ($order as $order )
                      
                  
                  <h3>Total Price: {{ $order->totalPrice }}</h3>
                  <h4>Tax: {{ $order->tax }}%</h4>
                    <h4>Grand Total: {{ $order->totalPriceWithTax }}</h4>
                    @endforeach
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h3>Thank You</h3>
            </div>
        </div>

</body>
</html>