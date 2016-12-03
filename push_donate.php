<?php
            require "dbconnect.php";
            
            //$num = $_POST['num'];
            $sql = "SELECT `amount`, `id_donateType`, member.name 
                    FROM `donate` 
                    INNER JOIN member ON member.id_member=donate.id_member 
                    ORDER BY `id_donate` DESC;" ;
                    
            $results = mysqli_query($connect,$sql)or die('Error : '.mysqli_error($connect));
            
            // $num = mysqli_num_rows($results);
            
            if(!empty($results)){
            
                foreach ($results as $key) {
                    $amount = $key['amount'];
                    $idtype = $key['id_donateType'];
                    $name = $key['name'];
                }
            }
            
            if($results)
                echo $name.",".$amount.",".$idtype;
        
        ?>