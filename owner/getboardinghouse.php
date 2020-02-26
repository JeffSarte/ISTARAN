<?php


include '../include/conn.php';



    $query = "SELECT * FROM boardinghouse";


    $result = mysqli_query($conn,$query);

        
    while($row = mysqli_fetch_array($result))
    {
        ?>
            <tbody>
                <tr>
                
                    <td><?php echo $row['Name']; ?></td> 
                    <td><?php echo $row['Description']; ?></td>
                    
                    <td class="text-right">

                    <form action="deleteboardinghouse.php" method="POST">
                                        <button type="submit" class="btn btn-danger badge-pill" name="id" value="<?php echo $row['id']; ?>" >Delete </button>
                                    </form>
                     <td class="text-right"><button 
                     type="submit" class="btn btn-danger badge-pill " <?php echo $row['id']; ?>>Edit</button></td>
                     
                    
                </tr>
            </tbody>
            
        <?php     
}


?>