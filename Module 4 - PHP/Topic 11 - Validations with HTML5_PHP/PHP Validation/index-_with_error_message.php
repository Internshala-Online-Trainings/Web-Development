<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Forms in Bootstrap</title>
    </head>
    <body>
        <div class="container">
            <center><h4>Front end validations</h4></center>
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <div class="panel panel-primary" >
                        <div class="panel-heading">
                            <h4>LOGIN</h4>
                        </div>
                        <div class="panel-body">
                            <form action="login_script.php" action="POST">
                                <div class="form-group">
                                    <input type="email" class="form-control"  placeholder="Email" name="e-mail" required = "true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" >
                                    <div><?php echo $_GET['email_error']; ?></div>
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" name="password" required = "true" pattern=".{6,}">
                                    <div><?php echo $_GET['password_error']; ?></div>
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary">Login</button>
                            </form><br/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>