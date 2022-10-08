<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/login_style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
        .new{
            /* margin:0px 50px; */
        }
        body{
            /* background:url('https://img.freepik.com/free-photo/delicious-vietnamese-food-including-pho-ga-noodles-spring-rolls-white-table_181624-34062.jpg?size=626&ext=jpg'); */
            /* background:url('https://media3.giphy.com/media/dAzkOoCgoFHtCAdFhe/giphy.gif'); */
            background:url('https://image.shutterstock.com/image-vector/man-key-near-computer-account-260nw-1499141258.jpg');
            /* background:url('https://images.unsplash.com/photo-1494859802809-d069c3b71a8a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8NzV8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60') */
            /* background:url('https://cdn.dribbble.com/users/2926706/screenshots/11038502/media/491f59a2886e9e4e4026f97f445c0ac6.gif') right; */
            background-repeat:no-repeat;
            background-size:cover;
            background-position:right;
            
            
        }
    </style>
  </head>
  <body>
    <div class="login-wrap new">
        <form action="user_login_submit.php" method="POST">

            <div class="login-html">
                <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
                <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
                <div class="login-form">
                    <div  class="sign-in-htm">
                        <div class="group">
                            <label for="user" class="label">Email Address</label>
                            <input id="user" name="email" type="email" class="input form-control" required>
                            <?php
                            if(isset($_SESSION['error'])){
                                echo $_SESSION['error'];
                            }
                            ?>
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Password</label>
                            <input id="pass" name="password" type="password" class="input" data-type="password" required>
                        </div>
                       
                        <div class="group">
                            <input type="submit" name='submit' class="button" value="Sign In">
                        </div>
                        <div class="hr"></div>
                        
                    </div>
        </form>
        
        

                <form action="user_register_submit.php" method="POST">

                    <div class="sign-up-htm">
                        <div class="group">
                            <label for="user" class="label">full_name</label>
                            <input id="user" name="full_name" type="text" class="input" required>
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Email Address</label>
                            <input id="pass" name="email" type="email" class="input" required>
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Password</label>
                            <input id="pass" name="password" type="password" class="input" data-type="password" required>
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Confirm Password</label>
                            <input id="pass" name="cpassword" type="password" class="input" data-type="password" required>
                        </div>
                       
                        <div class="group">
                            <input type="submit" name='submit' class="btn btn-primary button" data-bs-toggle="modal" data-bs-target="#exampleModal"   value="Sign Up">
                        </div>
                        <div class="hr"></div>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
   
    
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>