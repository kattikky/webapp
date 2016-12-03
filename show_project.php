<?php
    
    $sql = "SELECT `id_project`, `head`, `detail`, 
    `amount_ppNeed`, `amount_pp`, `date_pj`, `address` 
    FROM `project`;";
           
    $result = mysqli_query($connect,$sql,MYSQLI_USE_RESULT);
    
    if(!empty($result)){
        
        echo "<table border=1><caption>โครงการทั้งหมด</caption>";
        echo "<tr>";
        echo "<td>เลขที่โครงการ</td>
		      <td>หัวข้อโครงการ</td>
              <td>รายละเอียดโครงการ</td>
		      <td>จำนวนคนที่ต้องการ</td>
              <td>จำนวนคนที่เข้าร่วมโครงการแล้ว</td>
		      <td>วันที่โครงการ</td>
              <td>สถานที่จัดโครงการ</td>";
	    echo "</tr>";
        
        while($row = mysqli_fetch_assoc($result)){

            echo "<tr>";
            echo "<td>{$row['id_project']}</td>
		      <td>{$row['head']}</td>
              <td>{$row['detail']}</td>
		      <td>{$row['amount_ppNeed']}</td>
              <td>{$row['amount_pp']}</td>
		      <td>{$row['date_pj']}</td>
              <td>{$row['address']}</td>";
	        echo "</tr>";
            
        }
        
        echo "</table>";
    }
?>