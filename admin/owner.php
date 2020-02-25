<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Owner</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/sidebar.css">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    </head>
<body>


<?php  include '../include/adminSidebar.php'; ?>

    

    <div class="tabledesign">

    
    <table class="table">
  <thead class="thead-dark">
  
    <tr>     
    <th scope="col-5">First</th>
            <th scope="col">Mname</th>
            <th scope="col">Lname</th>
            <th scope="col">Age</th>
            <th scope="col">Gender</th>
            <th  class="text-right">username</th>
            <th  class="text-right">password</th>
            <th  class="text-right">number</th>
            <th  class="text-right">Date</th>
            <th scope="col-5">Action</th>
            
    </tr>
  <?php  include 'getowner.php';?>
</thead>
</table>
</div>

<div id="dashboard">
    <div class="header">
    <button type="button" class="btn btn-primary" v-on:click="dashboard1=true">Add BoardingHouse Owner</button>
    
    </div>
<div v-if="dashboard1">
<div  class="overlay" >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                   <h5 class="modal-title">Add BoardingHouse Owner</h5>
                  <button class="close" type="button"@click="dashboard1 = false">
                  <span aria-hidden="true"> &times</span>
                  </button>
                </div>
                    <div class="modal-body p-4">
                        <form action="saveowner.php" method="POST">
                            <div class="form-group">
                             <input type="text" name="fname" class="form-control form-control-lg" 
                             placeholder="FirstName">
                            </div>
                            <div class="form-group">
                                <input type="text" name="mname" class="form-control form-control-lg" 
                                placeholder="MiddleName">
                            </div>
                            <div class="form-group">
                             <input type="text" name="lname" class="form-control form-control-lg" 
                             placeholder="LastName">
                            </div>
                            <div class="form-group">
                             <input type="text" name="age" class="form-control form-control-lg" 
                             placeholder="Age">
                            </div>
                            <div class="form-group">
                             <input type="text" name="gender" class="form-control form-control-lg" 
                             placeholder="Gender">
                            </div>
                            <div class="form-group">
                             <input type="text" name="username" class="form-control form-control-lg" 
                             placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="text" name="password" class="form-control form-control-lg" 
                                placeholder="Password">
                            </div>
                            <div class="form-group">
                             <input type="text" name="number" class="form-control form-control-lg" 
                             placeholder="Number">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-info btn-block btn-lg">Add Owner</button>
                            </div>
        
                        </form>
                    </div>
            </div>
        </div>
    </div>

    </div>
</div>
</div> 
    
    




<script src="/js/modal.js"> </script>

</body>
</html>