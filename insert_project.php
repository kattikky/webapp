<form method="POST">
    </br>
    *.. Input New Project ..*
    </br>
    ชื่อโครงการ :
    <input type="text" name="head" /></br>
    ราบละเอียดของโครงการ :
    <input type="text" name="detail" /></br>
    จำนวนคนที่ต้องการ :
    <input type="text" name="amount_ppNeed" /></br>
    จำนวนคนที่เข้าร่วมแล้ว :
    <input type="text" name="hell" /></br>
    วันที่ทำโครงการ :
    <input type="date" name="date_pj" /></br>
    สถานที่จัดโครงการ :
    <input type="text" name="address" /></br>
    
    <input type="submit" value="เพิ่ม"> </br>
    
</form>

<?php

    $valid = true;

    if(!empty($_POST['head'])){
        $head = mysqli_escape_string($connect,$_POST['head']);
    }else {
        $valid = false;
    }
    
    if(!empty($_POST['detail'])){
        $detail = mysqli_escape_string($connect,$_POST['detail']);
    }else {
        $valid = false;
    }
    
    if(!empty($_POST['amount_ppNeed'])){
        $amount_ppNeed = mysqli_escape_string($connect,$_POST['amount_ppNeed']);
    }else {
        $valid = false;
    }
    
    // if(!empty($_POST['hell'])){
    //     $hell = mysqli_escape_string($connect,$_POST['hell']);
    // }else {
    //     $valid = false;
    // }
    
    //$hell = 0;
    
    if(!empty($_POST['hell'])){
        $hell = mysqli_escape_string($connect,$_POST['hell']);
    }else {
        $valid = false;
    }
    
    if(!empty($_POST['date_pj'])){
        $date_pj = mysqli_escape_string($connect,$_POST['date_pj']);
    }else {
        $valid = false;
    }
    
    if(!empty($_POST['address'])){
        $address = mysqli_escape_string($connect,$_POST['address']);
    }else {
        $valid = false;
    }
    
    //echo $head.",".$detail.",".$amount_ppNeed.",".$hell.",".$date_pj.",".$address;
    //(!empty($head))&&(!empty($detail))&&(!empty($amount_ppNeed))&&(!empty($hell))&&(!empty($date_pj))&&(!empty($address))
    
    if($valid){
        
        $strsql = "INSERT INTO `project`(`id_project`, `head`, `detail`, `amount_ppNeed`, `amount_pp`, `date_pj`, `address`) 
        VALUES (0,'{$head}','{$detail}','{$amount_ppNeed}','{$hell}','{$date_pj}','{$address}');";
        
        echo $strsql;
 
        $result = mysqli_query($connect,$strsql) or die("Query Error </br>");
        
        if($result){
            echo "เพิ่มโครงการใหม่เรียบร้อยแล้ว !";
        }
        
    }    
?>
