<?php
            require "dbconnect.php";
            
            //$num = $_POST['num'];
            $sql = "SELECT * FROM `member`;" ;
            $results = mysqli_query($connect,$sql)or die('Error : '.mysqli_error($connect));
            $num = mysqli_num_rows($results);
            
            $_SESSION['num_member'] = $num;
            
            echo $_SESSION['num_member'];
        ?>