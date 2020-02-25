<?php


include '../include/conn.php';



    $query = "SELECT * FROM boardinghouseowner";


    $result = mysqli_query($conn,$query);

        
    while($row = mysqli_fetch_array($result))
    {
        ?>
            <tbody>
                <tr>
                
                    <td><?php echo $row['FirstName']; ?></td> 
                    <td><?php echo $row['MiddleName']; ?></td>
                    <td><?php echo $row['LastName']; ?></td>
                    <td><?php echo $row['Age']; ?></td>
                    <td><?php echo $row['Gender']; ?></td>
                    <td><?php echo $row['UserName']; ?></td>
                    <td><?php echo $row['Password']; ?></td>
                    <td><?php echo $row['Number']; ?></td>
                    <td><?php echo $row['DateCreated']; ?></td>
                    <td class="text-right">

                    <form action="deleteowner.php" method="POST">
                                        <button type="submit" class="btn btn-danger badge-pill" name="id" value="<?php echo $row['id']; ?>" >Delete </button>
                                    </form>
                     <td class="text-right"><button 
                     type="submit" class="btn btn-danger badge-pill " <?php echo $row['id']; ?>>Edit</button></td>
                     
                    
                </tr>
            </tbody>
            
        <?php     
}


?>