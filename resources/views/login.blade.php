<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user login page</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

</head>
<body>
@include('layouts.nav')

                        <!-- user login box -->
    <div id="loginbox" style="margin-top: 50px;" class="mainbox col-lg-6 offset-md-3 col-md-8 offset-sm-2">
        <div class="card card-inverse card-info">
            <div class="card-header">
                <div class="card-title">Sign In</div>
                <div style="float: right; font-size: 80%; position: relative; top: -10px;"><a href="#">Forgot password?</a>
                </div>
            </div>
            <div style="padding-top: 30px;" class="card-block">
                <div style="display: none;" id="login-alert" class="alert alert-danger col-md-12"></div>
                
                                <!-- user login form -->

                <form id="loginform" class="" role="form" action="" method="POST">
                    @csrf
                    <div style="margin-bottom: 25px;" class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input
                        id="login-username" type="text" class="form-control" name="username" value=""
                        placeholder="username or email" />
                        @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div style="margin-bottom: 25px;" class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input
                        id="login-password" type="password" class="form-control" name="password"
                        placeholder="password" />
                        @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    <div class="input-group">
                        <div class="form-check">
                            <label>
                                <input id="login-remember" type="checkbox" name="remember" value="1" />Remember me</label>
                        </div>
                    </div>
                    <div style="margin-top: 10px;" class="form-group">
                        <!-- Button -->
                        <div class="offset-md-9 col-lg-9 controls"> <a id="btn-login" href="dashb" class="btn btn-success">Login  </a>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-12 control">
                            <div style="padding-top: 15px; font-size: 85%;">Don't have an account! <a href="register" >Sign Up Here</a>
                                                    <!-- onclick="$('#loginbox').hide(); $('#signupbox').show()" -->

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div> 

</body>
</html>