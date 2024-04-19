<?php
include "conn.php";

//this code is for attendance
if(isset($_POST['jen'])){

    $fn = $_POST['fn'];
    $ln = $_POST['ln'];
    $sec = $_POST['sec'];

    $insert = mysqli_query($conn, "INSERT INTO tbl_list VALUES('0','$fn','$ln','$sec')");

    if($insert == true){
        ?>
        <script>
            alert("1 Data is inserted.");
            window.location.href="records.php";
        </script>
        <?php
    }else{
        ?>
        <script>
            alert("Error in inserting.");
            window.location.href="records.php";
        </script>
        <?php
    }
}
