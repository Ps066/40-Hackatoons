<?php
session_start();
// include('conn.php');
function redirect($link){

    ?>
    <script>
        window.location.href='<?php echo $link?>';
    </script>

    <?php
        die();

    }
include('conn.php');

// if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $pass=$_POST['password'];
// $cpass=$_POST['cpassword'];
    $sql_email=" SELECT * FROM users WHERE email='$email' ";
    $result_email=mysqli_query($conn,$sql_email);

    $row1=mysqli_fetch_assoc($result_email);

    if(!$row1){
       $_SESSION['error']='<h1 style="color:red">email already registered</h1>';
       redirect('login.php');
    }
    






    $sql="SELECT * FROM users WHERE email='$email' and password='$pass' ";

    $result=mysqli_query($conn,$sql);

    $row=mysqli_fetch_assoc($result);
    // echo $row['email'];
    if($row){
        redirect('./admin/admin_site/templates/test.php');
    
    }
    else{
        ?>
        <script>
            alert("incorrect password");
        </script>
        <?php
        redirect('login.php');
    }
    
    
    mysqli_close($conn);

    


// }


?>