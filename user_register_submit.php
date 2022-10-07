<?php

function redirect($link){
    
    ?>
    <script>
        window.location.href='<?php echo $link?>';
    </script>

    <?php

    die();
}
include('conn.php');

if(isset($_POST['submit'])){

    $name=$_POST['full_name'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $cpass=$_POST['cpassword'];

    $emailid="SELECT * FROM users WHERE email='$email' ";
    $result1=mysqli_query($conn,$emailid);


    $ecount=mysqli_num_rows($result1);

    if($ecount>1){
        ?>
        <script>
            alert('email already exists');

        </script>
        <?php
    }else{
        if($pass===$cpass){

            $query= " INSERT INTO users (name,email,password,cpassword) values ('$name','$email','$pass','$cpass') ";
            $result=mysqli_query($conn,$query);

            if($result){
                ?>

                

                <script>
                    alert('connection sucessful');
                </script>
                <?php
            }else{
                ?>
                <script>
                    alert('no connection');
                </script>
                <?php
            }


        }else{
            ?>
            <script>
                alert('password not matching');
            </script>
            <?php
        }
    }
    
}


redirect('new.php');
    
mysqli_close($conn);

?>