<!DOCTYPE html>
<html lang="en">

<head>
  <title>Add Item Catagory</title>
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
  <!-- /header -->
    <!-- Sidebar -->
    @include('layouts.sidedash')

        <!-- sidebar -->
    <div class="container-fluid">
      <div class="container mt-3">
        <h2>Add New Item Catagory</h2>
        <form action="{{url('/')}}/addItemCategory" method="POST">
          @csrf
          <div class="mb-3 mt-3">
            <label for="item">Catagory Name:</label>
            <input type="text" class="form-control" id="item" placeholder="Enter Catagory Name" name="category" required>
          </div>
          <div class="mb-3 mt-3">
            <label for="item">Added By:</label>
            <input type="text" class="form-control" id="item" placeholder="Enter Catagory Name" name="addedby" required>
          </div>
          <input type="submit" name="submit" value="Save" class="btn btn-success">
          <!-- back-button -->
          {{-- <a href="displayitemcatagory.php" class="btn btn-success" role="button">Back</a> --}}
        </form>
      </div>
</div></div>
</body>

</html>