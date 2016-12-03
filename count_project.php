<?php
            require "dbconnect.php";
            
            //$num = $_POST['num'];
            $sql = "SELECT * FROM `project`;" ;
            $results = mysqli_query($connect,$sql)or die('Error : '.mysqli_error($connect));
            $numpj = mysqli_num_rows($results);
            
            $_SESSION['num_project'] = $numpj;
            
            echo $_SESSION['num_project'];
        ?>