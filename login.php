<?php
    
    require "dbconnect.php";
    
    
    session_start();
    
    if(empty($_SESSION['username'])){
        
        $login = "?page=login";
        echo "<a href='".$login."'>เข้าสู่ระบบ</a>\n</br>";
        
        $reg = "?page=reg";
        echo "<a href='".$reg."'>สมัครสมาชิก</a>\n</br>";
            
        if(!empty($_GET['page'])){
        
            $page = mysqli_escape_string($connect,$_GET['page']);
            
            if($page == "login"){
                require "user_login.php";
            }
            else if($page == "reg"){
                require "reg_member.php";
            }
         
        }
    }
    else if(!empty($_SESSION['username'])){
        
        echo "WELCOME MEMBER : ".$_SESSION['username']."\n</br>";
        
        $home = "index.php";
        echo "<a href='".$home."'>กลับไปหน้าหลัก</a>\n</br>";
        
        $logout = "?page=logout";
        echo "<a href='".$logout."'>ออกจากระบบ</a>\n</br>";
        
        if(!empty($_GET['page'])){
        
            $page = mysqli_escape_string($connect,$_GET['page']);
            
            if($page == "logout"){
                unset($_SESSION['username']);
                header("Location : http://localhost/MA-RSA");
            }
         
        }
    }
?>