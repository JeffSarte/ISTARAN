<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
    <link rel="stylesheet" href="css/sidebar.css">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>
<body>



<div class="sidebar">

  <header> Istaran </header>

  <ul>
  
  <li><a href="#"><i class="fas fa-qrcode">Dashboard</i></a></li>
  <li><a href="#">Owner</a></li>
  <li><a href="#">Boarders</a></li>
  <li><a href="#">Reports</a></li>
  <li><a href="#">History</a></li>  
  <li><a href="#">BoardingHouse</a></li>


  </ul>
  
</div>



 
<div class="header" id="dashboard">

<button v-on:click="dashboard1=true">Sample</button>

<div  v-if="dashboard1">

  <h1>Sample</h1>

</div>
</div>

<script src="js/modal.js">
</script>
</body>
</html>