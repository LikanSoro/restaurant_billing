<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Admin Dashboard</title>
</head>

<body>

  

@extends('layouts.app')
 <!-- header -->
 @include('layouts.nav')
 <!-- Sidebar -->
 @include('layouts.sidedash')
     <!-- sidebar -->
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- {{ __('You are logged in!') }} --}}
                    <div class="container-fluid px-4">
                        <div class="row g-3 my-2">
                    
                            <div class="col-md-3">
                                <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                                    <div>
                                        <h3 class="fs-2"></h3>
                                        <p class="fs-5"><h5>Staff</h5></p>
                                    </div>
                                   <a href="displayStaff"> <i class="far fa-id-card fs-1 primary-text border rounded-full secondary-bg p-3"></i></a>
                                </div>
                            </div>
                    
                            {{-- <div class="col-md-3">
                                <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                                    <div>
                                        <p class="fs-5">
                                        <h5>Category</h5>
                                        </p>
                                    </div>
                                    <a href="displayItemCategory">
                                        <i class="fa fa-th-large fs-1 primary-text border rounded-full secondary-bg p-3"></i></a>
                                </div>
                            </div> --}}
                            
                            <div class="col-md-3">
                                <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                                    <div>
                                        <h3 class="fs-2"></h3>
                                        <p class="fs-5">
                                        <h5>Items</h5>
                                        </p>
                                    </div>
                                    <a href="displayItem"> <i class="fa fa-cutlery fs-1 primary-text border rounded-full secondary-bg p-3"></i></a>
                                </div>
                            </div>
                    
                            <div class="col-md-3">
                                <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                                    <div>
                                        <h3 class="fs-2"></h3>
                                        <p class="fs-5">
                                        <h5>Tables</h5>
                                        </p>
                                    </div>
                                    <a href="manageTables"><i class="fa fa-braille fs-1 primary-text border rounded-full secondary-bg p-3"></i></a>
                                </div>
                            </div>
                    
                            <div class="col-md-3">
                                <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                                    <div>
                                        <h3 class="fs-2"></h3>
                                        <p class="fs-5">  <h5>Orders</h5>  </p>
                                    </div>
                                    <a href="addCustomer"><i class="fa fa-clipboard fs-1 primary-text border rounded-full secondary-bg p-3"></i></a>
                                </div>
                            </div>
                    
                            <div class="col-md-3">
                                <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                                    <div>
                                        <h3 class="fs-2"></h3>
                                        <p class="fs-5">  <h5>Discount Details</h5> </p>
                                    </div>
                                  <a href="discountdetails"><i class="fa fa-file-text fs-1 primary-text border rounded-full secondary-bg p-3"></i></a> 
                                </div>
                            </div>
                    
                            <div class="col-md-3">
                                <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                                    <div>
                                        <h3 class="fs-2"></h3>
                                        <p class="fs-5">  <h5>Generate Bill</h5> </p>
                                    </div>
                                  <a href="billgenerate"><i class="	fa fa-file-pdf-o fs-1 primary-text border rounded-full secondary-bg p-3"></i></a> 
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                                    <div>
                                        <h3 class="fs-2"></h3>
                                        <p class="fs-5">  <h5>Instant Report</h5> </p>
                                    </div>
                                  <a href="dailyreport"><i class="fa fa-bar-chart fs-1 primary-text border rounded-full secondary-bg p-3"></i></a> 
                                </div>
                            </div>
                            {{-- <div class="col-md-3">
                                <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                                    <div>
                                        <h3 class="fs-2"></h3>
                                        <p class="fs-5">  <h5>Bill Details</h5> </p>
                                    </div>
                                  <a href="todaysbill"><i class="fa fa-archive fs-1 primary-text border rounded-full secondary-bg p-3"></i></a> 
                                </div>
                            </div> --}}
                    
                        </div>
                    
                    </div>
                    {{-- cards --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- cards --}}

