<!DOCTYPE html>
<html lang="en">

<head>
    <title>Table Details</title>
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
    <!-- <div class="container-fluid">    
        <div class="container-fluid">
            <div class="row g-3 my-2">
                <div class="col-md-3">
                    <h3>Table-Details</h3>
                </div>
                <div class="col-md-3"><a href="rms_addtable.php" class="btn btn-success" role="button" style="margin-left: 0px;">Add_Table</a></div>
                <a href="index.php" class="btn btn-success ml-3" role="button">Back</a>

            </div>
        </div> -->
        <div class="container-fluid">
        <div class="row g-3 my-2">
            <div class="col">
                <h3>Table-Details</h3>
            </div>
            <div class="col">
                <a href="manageTables" class="btn btn-success btn-lg-3" role="button" style="margin-left: 450px;">Add Table</a>
            </div>
        </div>

        <!-- table -->
        
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Table_id</th>
                <th scope="col">Table Name</th>
                <th scope="col">Occupied</th>
                <th scope="col">Bill Paid</th>
                <th scope="col">action</th>
              </tr>
            </thead>

            <tbody>
              
                @foreach ($aTables as $aTable)
                <tr>
                    <td>{{$aTable->id}}</td>
                    <td>{{$aTable->tableName}}</td>
                    {{-- <td>{{$aTable->i_desc}}</td>
                    <td>{{$aTable->price}}</td> --}}
                    <td><a href="displayItem/{{$aTable->id}}">Delete</a></td>
                    {{-- <td><a href="{{route('delete/$item->item_id')}}">Delete</a></td> --}}
                </tr>
                @endforeach  
            </tbody>
          </table>

    </div>
    </div>
</body>

</html>