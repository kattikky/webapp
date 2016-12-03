<form method = "POST">
    Username : <input type = "text" name = "log_user" />
    Password : <input type = "password" name = "log_pass" />
    <input type = "submit" value = "login" />
</form>
   
<?php
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
    
    // if((!empty($_POST['log_user']))&&(!empty($_POST['log_pass']))){
    //     echo $username.$pass;
    //     gettype($valid);
    //     }
        
      
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
            echo "WELCOME : ".$_SESSION['username']."\n</br>";
            
            // $home = "index.php";
            // echo "<a href='".$home."'>กลับไปหน้าหลัก</a>\n</br>";
            
            // $logout = "?page=logout";
            // echo "<a href='".$logout."'>ออกจากระบบ</a>\n</br>";
            
            // if(!empty($_GET['page'])){
            
            //     $page = mysqli_escape_string($connect,$_GET['page']);
                
            //     if($page == "logout"){
            //         unset($_SESSION['username']);
            //         header("Location : http://localhost/MA-RSA");
            //     }
            
            // }
            //phpAlert("Hello world!\\n\\nPHP has got an Alert Box".$_SESSION['username']);
            // echo '<script language="javascript">';
            // echo 'alert("Welcome")'.$_SESSION['username'];
            // echo '</script>';
            // $home = "index.php";
            // echo "<a href='".$home."'>กลับไปหน้าหลัก</a>\n</br>";
            // header("Location : http://localhost/MA-RSA");
        }else{
            echo"Username or Password Incorrect";
    }
                
    }
?>