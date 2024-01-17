<?php
    
    if(isset($_COOKIE["username"])) {
        $username = $_COOKIE["username"];
        $password = $_COOKIE["password"];
    } else {
        $username = '';
        $password = '';
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Include Bootstrap CSS from a CDN -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Login</h2>
                    </div>
                    <div class="card-body">
                        <form method="post">
                            <div class="form-group">
                                <label for="username">Username:</label>
                                <input type="text" value="<?=$username?>" class="form-control" id="username" name="username">
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" value="<?=$password?>" class="form-control" id="password" name="password">
                            </div>
                            <div class="form-group">
                                <input type="checkbox" id="remember_me" name="remember_me" />
                                <label for="remember">Remember Me</label>

                                <a href class="" data-toggle="modal" data-target="#forgot_password" style="position:absolute; right:10px">
                      forgot password
                      </a> 
                            </div>
                            
                          
                            
                            <button type="submit" id="btn_login" class="btn btn-primary btn-block">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="forgot_password" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Forgot your password... </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id=""  method="post" style="width: 475px;">
      <div class="form-row">
                           <div class="form-group col-md-12">

                        <label for="inputEmail">Email</label> 
                        <input class="form-control" id="email" name="email" placeholder="Email" type="email">
                            </div>
      </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button class="btn btn-primary " id="btn_forgot_password" type="submit">Send Email</button>
            </div>
        </form> 
            
        </div>
        </div>
    </div>
  </div>
    <!-- Include Bootstrap JS and Popper.js from a CDN -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script src="../assets/js/custom.js"></script>

</body>
</html>
