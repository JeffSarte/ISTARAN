<?php
    include 'include/conn.php';


    $get_query = "SELECT * FROM boardinghouseowner join boardinghousecategory";
     $get= mysqli_query($conn,$get_query);
   
    
        $outp = $get->fetch_all(MYSQLI_ASSOC);
        echo json_encode($outp);



?>