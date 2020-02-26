<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BoardingHouse</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/ownerSidebar.css">
   
</head>
<body>

<?php  include '../include/ownerSidebar.php'; ?>

<table class="table">
    <thead class="thead-dark">
    
        <tr>     
        <th scope="col-5">Name</th>
                <th scope="col">Description</th>
               
                
        </tr>
        <?php  include 'getboardinghouse.php';?>
    </thead>
    </table>






        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                   <h5 class="modal-title">Add BoardingHouse Owner</h5>
                  <button class="close" type="button"@click="dashboard1 = false">
                  <span aria-hidden="true"> &times</span>
                  </button>
                </div>
                    <div class="modal-body p-4">
                        <form action="saveboardinghouse.php" method="POST">
                            <div class="form-group">
                             <input type="text" name="name" class="form-control form-control-lg" 
                             placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="text" name="description" class="form-control form-control-lg" 
                                placeholder="Description">
                            </div>
                           
                            
                            <div class="form-group">
                                <button class="btn btn-info btn-block btn-lg">Add BoardingHouse</button>
                            </div>
        
                        </form>
                    </div>
            </div>
            </div>
            </div>
            </div>
            
     

</body>
</html>