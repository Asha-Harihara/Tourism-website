<?php
    
   require('./php/component.php');
   $db=mysqli_connect('localhost','root', '', 'tourdb')
   or die ('error connecting to mysql server.');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour Guide</title>
    <head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <script> 
      $(function()
      {
          $("#nav").load("nav.html");
        
      });
      </script>
    <link rel="stylesheet" href="style.css">
    <!-- font awsome-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<h1 class="text-center" style="color: purple">On-A-Holiday</h1>
    <div id="nav"></div>  
    <div class="container">
    <div class="row">

   <?php
     $srch=$_POST["splace"];
    $query="SELECT * FROM places WHERE state='".$srch."' or name='".$srch."'";
    mysqli_query($db, $query) or die('error querring database.');
    $result=mysqli_query($db, $query);
    
      while($row=mysqli_fetch_array($result))
      {
         component($row['name'],$row['state'],$row['image']);
         
      }
      mysqli_close($db);
   ?>
   </div>
   </div>
</body>
</html>