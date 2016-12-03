<form name="regEmpForm" method="POST">
    Username :
    <input type="text" name="r_username" /></br>
    Password :
    <input type="password" name="r_password" /></br>
    Confirm Password :
    <input type="password" name="r_con_password" /></br>
    Full Name :
    <input type="text" name="r_fname" /></br>
    Last Name :
    <input type="text" name="r_lname" /></br>
    Citizen ID :
    <input type="text" name="r_citizen" /></br>
    E-mail :
    <input type="text" name="r_email" /></br>
    Phone Number :
    <input type="text" name="r_phone" /></br>
    Address :
    <input type="text" name="r_address" /></br>
    
    <input type="submit" value="สมัครสมาชิก"/>
</form>

<?php

    $valid = true;

    if(!empty($_POST['r_username'])){
        $username = mysqli_escape_string($connect,$_POST['r_username']);
    }else {
        $valid = false;
    }
    
    if(!empty($_POST['r_password'])){
        $pass = mysqli_escape_string($connect,$_POST['r_password']);
    }else {
        $valid = false;
    }
    
    if(!empty($_POST['r_fname'])){
        $fname = mysqli_escape_string($connect,$_POST['r_fname']);
    }else {
        $valid = false;
    }
    
    if(!empty($_POST['r_lname'])){
        $r_lname = mysqli_escape_string($connect,$_POST['r_lname']);
    }else {
        $valid = false;
    }
    
    if(!empty($_POST['r_citizen'])){
        $r_citizen = mysqli_escape_string($connect,$_POST['r_citizen']);
    }else {
        $valid = false;
    }
    
    if(!empty($_POST['r_email'])){
        $r_email = mysqli_escape_string($connect,$_POST['r_email']);
    }else {
        $valid = false;
    }
    
    if(!empty($_POST['r_phone'])){
        $r_phone = mysqli_escape_string($connect,$_POST['r_phone']);
    }else {
        $valid = false;
    }
    
    if(!empty($_POST['r_address'])){
        $r_address = mysqli_escape_string($connect,$_POST['r_address']);
    }else {
        $valid = false;
    }
    
    if($valid){
        
        $strsql = "INSERT INTO `register` (`id_reg`, `username`, `password`, `type_user`) VALUES ('0', '{$username}', MD5('{$pass}'), 'user');";
        
        $result = mysqli_query($connect,$strsql) or die("Query Error </br>");
        
        if ($result) {
            
            $strsql1 = "SELECT `id_reg`, `username`, `password`, `type_user` FROM `register` WHERE `username` = '{$username}';";
            
            $result1 = mysqli_query($connect,$strsql1,MYSQLI_USE_RESULT) or die("Query Error </br>");
            
            foreach ($result1 as $key ) {
                $_SESSION['id_reg']=$key['id_reg'];
            }
            
            if ($result1) {
                
                $strsql2 = "INSERT INTO `member` (`id_member`, `name`, `sname`, `citizen_id`, `email`, `phone_number`, `address`, 
                `name_img`, `path_img`, `id_reg`) 
                VALUES ('0', '{$fname}', '{$r_lname}', '{$r_citizen}', '{$r_email}', '{$r_phone}', '{$r_address}', NULL, NULL, '{$_SESSION['id_reg']}');";
                
                $result2 = mysqli_query($connect,$strsql2) or die("Query Error </br>");
                
                if($result2){
                    echo "REGISTER SUCCESS !";
                    // header("Location : http://localhost/last_test");
                    // exit;
                }
            }//if_insert_member_with_idreg
        }//if_select_reg
    }//if_insert_reg    
?>