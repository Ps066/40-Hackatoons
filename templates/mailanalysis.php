<!DOCTYPE html>
<html lang="en">
<head>
    <!-- add your style link and keep this meta as it is -->
    <?php include_once './meta_tags.php'; ?>
    <title>Document</title>
</head>
<body id="page-top">
        <div class="container">
        <form method="post" action="./maillogic.php">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address of sender</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="sender">
            <div id="emailHelp" class="form-text">We'll verify weather the email is geniune or not</div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
        
   <?php 
     
    include_once './footer_tags.php'; 
    
    ?>
    
    
</body>
</html>