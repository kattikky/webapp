<?php
    require "dbconnect.php";
    session_start();
?>

<form method="POST">
    </br>
    *.. ค้นหา ..*
    </br>
    ค้นหาจากบอร์ด : 
    <select name="board" autofocus>
        <option value="blood">บอร์ดขอรับบริจาคเลือด</option>
        <option value="food">บอร์ดขอรับบริจาคอาหาร</option>
        <option value="money">บอร์ดขอรับบริจาคเงิน</option>
        <option value="talking">บอร์ดพูดคุย</option>
        <option value="thing">บอร์ดขอรับบริจาคสิ่งของ</option>
    </select> </br>
    ระบุคำที่ต้องการหา : 
    <input type="text" name="search" /></br>
        
    <input type="submit" value="ค้นหา"/>
</form>

<?php

    $valid = true;

    if(!empty($_POST['board'])){
        $board = mysqli_escape_string($connect,$_POST['board']);
    }else {
        $valid = false;
    }
    if(!empty($_POST['search'])){
        $search = mysqli_escape_string($connect,$_POST['search']);
    }else {
        $valid = false;
    }
    
    if($valid){
        
        if ($board=="blood") {
            $sql = "SELECT `head_b`, `detail_b`, `date_b`, `address_b`, member.name 
                     FROM `board_blood` 
                     INNER JOIN member 
                     ON member.id_member=board_blood.id_member 
                     WHERE `head_b`LIKE '%{$search}%';";
            // echo $sql_f;
            $result = mysqli_query($connect,$sql);
            
            $sum = mysqli_num_rows($result);
            // echo "SUM : ".$sum;
            
            if ($sum >= 1) {
                echo "<table border=1><caption>*..  ผลการค้นหา : บอร์ดขอรับบริจาคเลือด  ..*</caption>";
                echo "<tr>";
                echo "<td>หัวข้อบอร์ด</td>
                      <td>รายละเอียด</td>
                      <td>ที่อยู่</td>
                      <td>วันที่ตั้งบอร์ด</td>
                      <td>ชื่อคนตั้งบอร์ด</td>";
                echo "</tr>";
                
                while($row = mysqli_fetch_assoc($result)){

                    echo "<tr>";
                    echo "<td>{$row['head_b']}</td>
                    <td>{$row['detail_b']}</td>
                    <td>{$row['address_b']}</td>
                    <td>{$row['date_b']}</td>
                    <td>{$row['name']}</td>";
                    echo "</tr>";
                    
                }
                
                echo "</table>";
            }else {
                echo "ไม่มีบอร์ดที่ค้นหา !";
            }
            
            
        }else if ($board=="food"){
            $sql = "SELECT `head_f`, `amount_f`, `address_f`, `date_f`, member.name 
                     FROM `board_food` 
                     INNER JOIN member 
                     ON member.id_member=board_food.id_member 
                     WHERE `head_f`LIKE '%{$search}%';";
            // echo $sql_f;
            $result = mysqli_query($connect,$sql);
            $sum = mysqli_num_rows($result);
            if ($sum >= 1) {
                echo "<table border=1><caption>*..  ผลการค้นหา : บอร์ดขอรับบริจาคอาหาร  ..*</caption>";
                echo "<tr>";
                echo "<td>หัวข้อบอร์ด</td>
                      <td>จำนวนอาหาร</td>
                      <td>ที่อยู่</td>
                      <td>วันที่ตั้งบอร์ด</td>
                      <td>ชื่อคนตั้งบอร์ด</td>";
                echo "</tr>";
                
                while($row = mysqli_fetch_assoc($result)){

                    echo "<tr>";
                    echo "<td>{$row['head_f']}</td>
                    <td>{$row['amount_f']}</td>
                    <td>{$row['address_f']}</td>
                    <td>{$row['date_f']}</td>
                    <td>{$row['name']}</td>";
                    echo "</tr>";
                    
                }
                
                echo "</table>";
            }else {
                echo "ไม่มีบอร์ดที่ค้นหา !";
            }
            
            
        }else if ($board=="money"){
            $sql = "SELECT `head_m`, `detail_m`, `date_m`, `name_bank`, `number_bank`, `bank`, `brach_bank`, member.name 
                     FROM `board_money` 
                     INNER JOIN member 
                     ON member.id_member=board_money.id_member 
                     WHERE `head_m`LIKE '%{$search}%';";
            // echo $sql_f;
            $result = mysqli_query($connect,$sql);
            $sum = mysqli_num_rows($result);
            if ($sum>=1) {
                echo "<table border=1><caption>*..  ผลการค้นหา : บอร์ดขอรับบริจาคเงิน  ..*</caption>";
                echo "<tr>";
                echo "<td>หัวข้อบอร์ด</td>
                      <td>รายละเอียด</td>
                      <td>ชื่อบัญชี</td>
                      <td>เลขที่บัญชี</td>
                      <td>ธนาคาร</td>
                      <td>สาขา</td>
                      <td>ชื่อคนตั้งบอร์ด</td>";
                echo "</tr>";
                
                while($row = mysqli_fetch_assoc($result)){

                    echo "<tr>";
                    echo "<td>{$row['head_m']}</td>
                    <td>{$row['detail_m']}</td>
                    <td>{$row['name_bank']}</td>
                    <td>{$row['number_bank']}</td>
                    <td>{$row['bank']}</td>
                    <td>{$row['brach_bank']}</td>
                    <td>{$row['name']}</td>";
                    echo "</tr>";
                    
                }
                
                echo "</table>";
            }else {
                echo "ไม่มีบอร์ดที่ค้นหา !";
            }
            
            
        }else if ($board=="talking"){
            $sql = "SELECT `head_tk`, `date_tk`, member.name 
                     FROM `board_talking` 
                     INNER JOIN member 
                     ON member.id_member=board_talking.id_member 
                     WHERE `head_tk`LIKE '%{$search}%';";
            // echo $sql_f;
            $result = mysqli_query($connect,$sql);
            $sum = mysqli_num_rows($result);
            if ($sum>=1) {
                echo "<table border=1><caption>*..  ผลการค้นหา : บอร์ดพูดคุย  ..*</caption>";
                echo "<tr>";
                echo "<td>หัวข้อบอร์ด</td>
                      <td>วันที่ตั้งบอร์ด</td>
                      <td>ชื่อคนตั้งบอร์ด</td>";
                echo "</tr>";
                
                while($row = mysqli_fetch_assoc($result)){

                    echo "<tr>";
                    echo "<td>{$row['head_tk']}</td>
                    <td>{$row['date_tk']}</td>
                    <td>{$row['name']}</td>";
                    echo "</tr>";
                    
                }
                
                echo "</table>";
            }else {
                echo "ไม่มีบอร์ดที่ค้นหา !";
            }
            
            
        }else if ($board=="thing"){
            $sql = "SELECT`head_t`, `amount_t`, `detail_t`, `address_t`, `date_t`, member.name 
                     FROM `board_thing` 
                     INNER JOIN member 
                     ON member.id_member=board_thing.id_member 
                     WHERE `head_t`LIKE '%{$search}%';";
            // echo $sql_f;
            $result = mysqli_query($connect,$sql);
            $sum = mysqli_num_rows($result);
            if ($sum>=1) {
                echo "<table border=1><caption>*..  ผลการค้นหา : บอร์ดขอรับบริจาคสิ่งของ  ..*</caption>";
                echo "<tr>";
                echo "<td>หัวข้อบอร์ด</td>
                      <td>รายละเอียด</td>
                      <td>จำนวนสิ่งของ</td>
                      <td>ที่อยู่</td>
                      <td>วันที่ตั้งบอร์ด</td>
                      <td>ชื่อคนตั้งบอร์ด</td>";
                echo "</tr>";
                
                while($row = mysqli_fetch_assoc($result)){

                    echo "<tr>";
                    echo "<td>{$row['head_t']}</td>
                    <td>{$row['detail_t']}</td>
                    <td>{$row['amount_t']}</td>
                    <td>{$row['address_t']}</td>
                    <td>{$row['date_t']}</td>
                    <td>{$row['name']}</td>";
                    echo "</tr>";
                    
                }
                
                echo "</table>";
            }else {
                echo "ไม่มีบอร์ดที่ค้นหา !";
            }
        }
    }
?>