<?php
    
    require "dbconnect.php";
    
    if(!empty($_GET['tab'])){
    $tab = $_GET['tab'];
    
    
    if($tab == "tab1"){
        
        $sql1 = "SELECT `board_blood`.`head_b`, `board_blood`.`date_b`, member.name FROM `board_blood` 
            INNER JOIN member ON member.id_member=board_blood.id_member 
            ORDER BY `id_bBlood` DESC LIMIT 1;";
    
        $result1 = mysqli_query($connect,$sql1,MYSQLI_USE_RESULT);
        
        if(!empty($result1)){
            
            foreach ($result1 as $key) {
                $head_b = $key['head_b'];
                $date_b = $key['date_b'];
                $name_b = $key['name'];
            }
        }
        
        $sql2 = "SELECT board_food.`head_f`, board_food.`date_f`, member.name 
        FROM board_food INNER JOIN member ON member.id_member=board_food.id_member ORDER BY `id_bFood` DESC LIMIT 1;";
    
        $result2 = mysqli_query($connect,$sql2,MYSQLI_USE_RESULT);
        
        if(!empty($result2)){
            
            foreach ($result2 as $key) {
                $head_f = $key['head_f'];
                $date_f = $key['date_f'];
                $name_f = $key['name'];
            }
        }
        
        $sql3 = "SELECT  board_money.`head_m`, board_money.`date_m`, member.name
                 FROM `board_money` 
                 INNER JOIN member ON member.id_member=board_money.id_member 
                 ORDER BY `id_bMoney`DESC LIMIT 1";
    
        $result3 = mysqli_query($connect,$sql3,MYSQLI_USE_RESULT);
        
        if(!empty($result3)){
            
            foreach ($result3 as $key) {
                $head_m = $key['head_m'];
                $date_m = $key['date_m'];
                $name_m = $key['name'];
            }
        }
        
        $sql4 = "SELECT  board_talking.`head_tk`, board_talking.`date_tk`, member.name
                 FROM `board_talking` 
                 INNER JOIN member ON member.id_member=board_talking.id_member 
                 ORDER BY `id_bTalking`DESC LIMIT 1";
    
        $result4 = mysqli_query($connect,$sql4,MYSQLI_USE_RESULT);
        
        if(!empty($result4)){
            
            foreach ($result4 as $key) {
                $head_tk = $key['head_tk'];
                $date_tk = $key['date_tk'];
                $name_tk = $key['name'];
            }
        }
        
        $sql5 = "SELECT  board_thing.`head_t`, board_thing.`date_t`, member.name
                 FROM `board_thing` 
                 INNER JOIN member ON member.id_member=board_thing.id_member 
                 ORDER BY `id_bThing`DESC LIMIT 1";
    
        $result5 = mysqli_query($connect,$sql5,MYSQLI_USE_RESULT);
        
        if(!empty($result5)){
            
            foreach ($result5 as $key) {
                $head_t = $key['head_t'];
                $date_t = $key['date_t'];
                $name_t = $key['name'];
            }
        }
        
        if($result1&&$result2&&$result3&&$result4&&$result5)
        echo $head_b.",".$name_b.",".$date_b.",".$head_m.",".$name_m.",".$date_m.",".$head_tk.",".$name_tk.",".$date_tk.",".$head_f.",".$name_f.",".$date_f.",".$head_t.",".$name_t.",".$date_t;
        
        
    }
    
    
    else if($tab == "tab2"){
        
        $sql1 = "SELECT `board_blood`.`head_b`, `board_blood`.`date_b`, member.name FROM `board_blood` 
            INNER JOIN member ON member.id_member=board_blood.id_member 
            ORDER BY `id_bBlood` ASC LIMIT 1;";
    
        $result1 = mysqli_query($connect,$sql1,MYSQLI_USE_RESULT);
        
        if(!empty($result1)){
            
            foreach ($result1 as $key) {
                $head_b = $key['head_b'];
                $date_b = $key['date_b'];
                $name_b = $key['name'];
            }
        }
        
        $sql2 = "SELECT board_food.`head_f`, board_food.`date_f`, member.name 
        FROM board_food INNER JOIN member ON member.id_member=board_food.id_member ORDER BY `id_bFood` ASC LIMIT 1;";
    
        $result2 = mysqli_query($connect,$sql2,MYSQLI_USE_RESULT);
        
        if(!empty($result2)){
            
            foreach ($result2 as $key) {
                $head_f = $key['head_f'];
                $date_f = $key['date_f'];
                $name_f = $key['name'];
            }
        }
        
        $sql3 = "SELECT  board_money.`head_m`, board_money.`date_m`, member.name
                 FROM `board_money` 
                 INNER JOIN member ON member.id_member=board_money.id_member 
                 ORDER BY `id_bMoney`ASC LIMIT 1";
    
        $result3 = mysqli_query($connect,$sql3,MYSQLI_USE_RESULT);
        
        if(!empty($result3)){
            
            foreach ($result3 as $key) {
                $head_m = $key['head_m'];
                $date_m = $key['date_m'];
                $name_m = $key['name'];
            }
        }
        
        $sql4 = "SELECT  board_talking.`head_tk`, board_talking.`date_tk`, member.name
                 FROM `board_talking` 
                 INNER JOIN member ON member.id_member=board_talking.id_member 
                 ORDER BY `id_bTalking`ASC LIMIT 1";
    
        $result4 = mysqli_query($connect,$sql4,MYSQLI_USE_RESULT);
        
        if(!empty($result4)){
            
            foreach ($result4 as $key) {
                $head_tk = $key['head_tk'];
                $date_tk = $key['date_tk'];
                $name_tk = $key['name'];
            }
        }
        
        $sql5 = "SELECT  board_thing.`head_t`, board_thing.`date_t`, member.name
                 FROM `board_thing` 
                 INNER JOIN member ON member.id_member=board_thing.id_member 
                 ORDER BY `id_bThing`ASC LIMIT 1";
    
        $result5 = mysqli_query($connect,$sql5,MYSQLI_USE_RESULT);
        
        if(!empty($result5)){
            
            foreach ($result5 as $key) {
                $head_t = $key['head_t'];
                $date_t = $key['date_t'];
                $name_t = $key['name'];
            }
        }
        
        if($result1&&$result2&&$result3&&$result4&&$result5)
        echo $head_b.",".$name_b.",".$date_b.",".$head_m.",".$name_m.",".$date_m.",".$head_tk.",".$name_tk.",".$date_tk.",".$head_f.",".$name_f.",".$date_f.",".$head_t.",".$name_t.",".$date_t;
        
        
    }
    }
    
    // else if($tab == "tab2"){
    //     echo "Data From Tab2";
    // }
    // else if($tab == "tab3"){
    //     echo "Data From Tab3";
    // }
    // else if($tab == "tab4"){
    //     echo "Data From Tab4";
    // }
    
?>