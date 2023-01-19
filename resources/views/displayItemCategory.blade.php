
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Item Catagory Details</title>
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
    

    <div class="container-fluid">
        <div class="row g-3 my-2">
            <div class="col">
                <h3>Catagory-Details</h3>
            </div>
            <div class="col">
                <a href="addItemCategory" class="btn btn-success btn-lg-3" role="button" style="margin-left: 450px;">Add New</a>
                {{-- <a href="index.php" class="btn btn-success ml-3" role="button">Back</a> --}}

            </div>
        </div>
    


            <!-- table -->
            
                <div class="container-fluid">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Catagory-Name</th>
                                <th scope="col">Added-By</th>
                                <th colspan="2">Action</th>

                            </tr>
                        </thead>
                        @foreach ($itemcat as $items)
                                <tr>
                                    <td>{{$items->ic_id}}</td>
                                    <td>{{$items->cat_name}}</td>
                                    <td>{{$items->added_by}}</td>
                                    <td><a href="displayItemCategory/{{$items->ic_id}}">Delete</a></td>
                                    {{-- <td><a href="{{route('delete/$item->item_id')}}">Delete</a></td> --}}
                                </tr>
                                @endforeach  
                    
                    </table>
                </div>
    </div>
</body>

</html>