<form method="POST">
    </br>
    *.. เลือกโครงการที่ต้องการแก้ไข ..*
    </br>
    เลขที่โครงการ :
    <input type="text" name="id_pj" /></br>
    จำนวนผู้คนที่เข้าร่วมแล้ว :
    <input type="text" name="pp" /></br>
        
    <input type="submit" value="แก้ไข"/>
</form>

<?php

    $valid = true;

    if(!empty($_POST['id_pj'])){
        $id_pje = mysqli_escape_string($connect,$_POST['id_pj']);
    }else {
        $valid = false;
    }
    
    if(!empty($_POST['pp'])){
        $pp = mysqli_escape_string($connect,$_POST['pp']);
    }else {
        $valid = false;
    }
    
    if($valid){
        
        $strsql = "UPDATE `project` SET `amount_pp` = '{$pp}' WHERE `project`.`id_project` = '{$id_pje}';";
        
        $result = mysqli_query($connect,$strsql) or die("Query Error </br>");
        
        if ($result) {
            echo "แก้ไขเรียบร้อย !";
        }
    }
?>