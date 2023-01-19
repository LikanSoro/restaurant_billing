<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


    <title>user Register page</title>
</head>
<body>

@include('layouts.nav')
    <div id="signupbox" style="margin-top: 50px;" class="mainbox col-lg-6 offset-md-3 col-md-8 offset-sm-2">
        <div class="card card-inverse card-info">
            <div class="card-header">
                <div class="card-title">Sign Up</div>
                <div style="float: right; font-size: 85%; position: relative; top: -10px;"><a id="signinlink" href="welcome">Sign In</a>
                <!-- href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()" -->
                </div>
            </div>
            <div class="card-block">

                <!-- user registration form -->
                
                <form id="signupform" class="" role="form" action="" method="POST">
                    @csrf
                    <div id="signupalert" style="display: none;" class="alert alert-danger">
                        <p>Error:</p> <span></span>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-lg-3 form-control-label">Email</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="email" placeholder="Email Address"/>
                            @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>      
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-lg-3 form-control-label">Name</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="name" placeholder="Name"/>
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="password" class="col-lg-3 form-control-label">Password</label>
                        <div class="col-lg-9">
                            <input type="password" class="form-control" name="password" placeholder="Password"
                            />
                        </div>
                    </div>
                    
                    </div>
                    <div class="form-group">
                        <!-- Button -->
                        <div class="offset-md-9 col-lg-9">
                            <button id="btn-signup" type="button" class="btn btn-info"><i class="icon-hand-left"></i>Sign Up</button>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
 
</body>
</html>
