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
        <div class="container-fluid">
        <div class="row g-2 my-3">
            <center>
            <div class="col">
                <h1>Table-Details</h1>
            </div>
            <div class="mt-3">
                <a href="manageTables/addTable" class="btn btn-info btn-lg-3" role="button">Add Table</a>
            </div>
        </center>
        </div>

        <!-- table -->
        <center>
        <div class="col-lg-3 mt-4">
            <div class="card bg-white mb-3 text-center shadow p-3 mb-3 rounded">
                <div class="container-fluid mt-3">
        <table class="table">
            <thead>
              <tr>
                <th >Table ID</th>
                <th >Table Status</th>
                <th >Action</th>
              </tr>
            </thead>

            <tbody>
              
                @foreach ($tables as $table)
                <tr>
                    <td>{{$table->table_id}}</td>
                    <td>
                        @if ($table->occupied == 0)
                            <span class="badge bg-success">Available</span>
                        @else
                            <span class="badge bg-danger">Occupied</span>
                        @endif
                    
                    <td><a class="btn btn-danger" href="mangeTables/{{$table->table_id}}">Delete</a></td>
                    
                </tr>
                @endforeach  
            </tbody>
          </table>
        </div>
    </div>
</div>
</center>
    </div>
    </div>
</body>

</html>