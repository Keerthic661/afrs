<!DOCTYPE html>
<html>
<head>
<title>adminhome</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/style.css');?>" media="all">
    <meta charset=utf-8>
    <meta name="viewport" content="width=device-width,initial-scale=1">
            <!---Fontawesome--->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!---custom style---->
    <!-- <link rel="stylesheet" href="css/style.css"> -->
</head>
<style>
  .bi1{
    background-image:url("../img/44.jpg");
    background-size:cover;
    
  }

</style>
  <!---body startshere--->
<body class="bi1">


  <!---main nav--->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        
      <a class="navbar-brand" href="<?php echo base_url()?>main/addairlinedetail">flight details</a> 

      <a class="navbar-brand" href="<?php echo base_url()?>main/viewform"> Booking details</a>
      <a class="navbar-brand" href="<?php echo base_url()?>main/userview"> View users</a>
      <a class="navbar-brand" href="<?php echo base_url()?>main/file">Issue Ticket </a>
     
    
      <a class="navbar-brand" href="<?php echo base_url()?>main/notification"> Add Notification</a>      
      <a class="navbar-brand " href="<?php echo base_url()?>main/index"> Logout</a>      
      </div>
    </nav>
    <!---nav end--->
    <!--head nav start--->
  <div class="jumbotron text-center">
    <h1>Airline Booking System </h1>
    <p>We specialize in your air plan!</p>
  </div>
  <!---head nav end--->
 



   
</body>
<!---Popper---->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
</script>
<script >
 
</script>
<!---Custom Js-->
<script src="js/script.js"></script>
</body>
</html>