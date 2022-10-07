<?php
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

    $sql="SELECT * FROM users WHERE email='$email' and password='$pass' ";

    $result=mysqli_query($conn,$sql);

    $row=mysqli_fetch_assoc($result);
    // echo $row['email'];
    if($row){
        redirect('new.php');
    
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