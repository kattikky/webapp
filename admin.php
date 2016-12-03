<?php
    
    require "dbconnect.php";
    
    session_start();
    
    if(empty($_SESSION['username'])){
        require "admin_login.php";
    } 
    else if((!empty($_SESSION['username']))&&(($_SESSION['role'])=="admin")){
        
        echo "Welcome To Control Page Project : ".$_SESSION['username']." :)\n</br>";
        require "show_project.php";
        
        $insert = "?page=insert";
        echo "<a href='".$insert."'>เพิ่มโครงการ</a> &nbsp";
        
        $edit = "?page=edit";
        echo "<a href='".$edit."'>แก้ไขจำนวนคน</a> &nbsp";
        
        $logout = "?page=logout";
        echo "<a href='".$logout."'>ออกจากระบบ</a>\n</br>";
            
        if(!empty($_GET['page'])){
        
            $page = mysqli_escape_string($connect,$_GET['page']);
            
            if($page == "logout"){
                unset($_SESSION['username']);
                mysqli_close($connect);
                header("Location : http://localhost/MA-RSA/admin.php");
            }
            else if($page == "insert"){
                require "insert_project.php";
            }
            else if($page == "edit"){
                require "edit_pp.php";
            }
         
        }
    }
    else {
        
        echo "คุณไม่สามารถเข้าถึงหน้านี้ได้\n</br>";
        
        $home = "index.php";
        echo "<a href='".$home."'>กลับสู่หน้าหลัก</a>\n</br>";
        
        $logout = "?page=logout";
        echo "<a href='".$logout."'>ออกจากระบบ</a>\n</br>";
            
        if(!empty($_GET['page'])){
        
            $page = mysqli_escape_string($connect,$_GET['page']);
            
            if($page == "logout"){
                unset($_SESSION['username']);
                mysqli_close($connect);
                header("Location : http://localhost/MA-RSA/admin.php");
            }
        }
    }
?>