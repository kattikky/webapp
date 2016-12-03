<form method = "POST" >
    Username : <input type = "text" name = "log_user" />
    Password : <input type = "password" name = "log_pass" />
    <input type = "submit" value = "login" />
</form>

<?php
    
    require "dbconnect.php";
    $valid = true;
    
    if(!empty($_POST['log_user'])){
        $username = mysqli_escape_string($connect,$_POST['log_user']);
    }else {
        $valid = false;
    }
    
    if(!empty($_POST['log_pass'])){
        $pass = mysqli_escape_string($connect,$_POST['log_pass']);
    }else {
        $valid = false;
    }
    
    if($valid){
        
        $strsql = "SELECT * FROM `register` 
                    WHERE `username` = '{$username}'
                    AND `password` = MD5('{$pass}');";
                    
        $results = mysqli_query($connect,$strsql)or die('Error : '.mysqli_error($connect));
        
        if($results){
            
            foreach($results as $row){
                
            $_SESSION['username']= $row['username'];
            $_SESSION['role']= $row['type_user'];
            
            }
            if($_SESSION['role']=="admin"){
                header("Location : http://localhost/MA-RSA/admin.php");
            }else{
                echo "คุณไม่สามารถเข้าถึงหน้านี้ได้\n</br>";
                unset($_SESSION['username']);
                $home = "index.php";
                echo "<a href='".$home."'>กลับสู่หน้าหลัก</a>\n</br>";
                
            }
                
        }
        else
            echo"Username or Password Incorrect";
    }
?>