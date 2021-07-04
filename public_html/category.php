<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">  

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="stylec.css">

  <title>category@3x</title>
</head>
<body>
 <?php 
 include 'db.php';
 session_start();
// $ms = $_GET['ms'];
 $regid =  $_SESSION['register_id'];
 
 ?>    
 <section id="category3x">
   <div class="row text-center">
     <div class="col">
       <h1>Choose your Preferences</h1>
     </div> 
   </div>
   <div class="row text-center">
     <div class="col">
       <p>(MINIMUM 5)</p>
     </div> 
   </div>
   <?php
   include 'db.php';
   mysqli_set_charset($con, 'utf8');
   $result = mysqli_query($con, "SELECT * FROM category ORDER BY cat");
   while ($row = mysqli_fetch_array($result)) {
    ?>
    <div class="container"> 
      <div>
        <label>
         <form action="cat_checkbox.php" method="post">
         <input class="single-checkbox" type="checkbox" value="<?php echo $row['cat_id']; ?>" name="checklist[]">
         <span><?php echo $row['cat']; ?></span>
       </label>
     </div>
   <!--  <div>
      <label>

       <input type="checkbox" name="">
       <span>Lifestyle</span>

     </label>
   </div>
 </div>

 <div class="container sect2"> 
  <div>
    <label>

     <input type="checkbox" name="">
     <span>Buisness</span>

   </label>
 </div>
 <div>
  <label>

   <input type="checkbox" name="">
   <span>Sports</span>

 </label>
</div>
<div>
  <label>

   <input type="checkbox" name="">
   <span>Fashion</span>

 </label>
</div>     

</div>
<div class="container"> 
  <div>
    <label>

     <input type="checkbox" name="">
     <span>Technology</span>

   </label>
 </div>
 <div>
  <label>

   <input type="checkbox" name="">
   <span>Entertainment</span>

 </label>
</div>
</div>         

<div class="container sect2"> 
  <div>
    <label>

     <input type="checkbox" name="">
     <span>Lorem</span>

   </label>
 </div>
 <div>
  <label>

   <input type="checkbox" name="">
   <span>Lorem</span>

 </label>
</div>
<div>
  <label>

   <input type="checkbox" name="">
   <span>Lorem</span>

 </label>
</div>     

</div> 

<div class="container"> 
  <div>
    <label>

     <input type="checkbox" name="">
     <span>Lorem</span>

   </label>
 </div>
 <div>
  <label>

   <input type="checkbox" name="">
   <span>Lorem</span>

 </label>
</div>
</div>         
<div class="container sect2"> 
  <div>
    <label>

     <input type="checkbox" name="">
     <span>Lorem</span>

   </label>
 </div>
 <div>
  <label>

   <input type="checkbox" name="">
   <span>Lorem</span>

 </label>
</div>
<div>
  <label>

   <input type="checkbox" name="">
   <span>Lorem</span>

 </label>
</div>     

</div> 

<div class="container"> 
  <div>
    <label>

     <input type="checkbox" name="">
     <span>Lorem</span>

   </label>
 </div>
 <div>
  <label>

   <input type="checkbox" name="">
   <span>Lorem</span>

 </label>
</div>
</div>        
<div class="container sect2"> 
  <div>
    <label>

     <input type="checkbox" name="">
     <span>Lorem</span>

   </label>
 </div>
 <div>
  <label>

   <input type="checkbox" name="">
   <span>Lorem</span>

 </label>
</div>
<div>
  <label>

   <input type="checkbox" name="">
   <span>Lorem</span>

 </label>
</div>     

</div> 

<div class="container"> 
  <div>
    <label>

     <input type="checkbox" name="">
     <span>Lorem</span>

   </label>
 </div>
 <div>
  <label>

   <input type="checkbox" name="">
   <span>Lorem</span>

 </label>
</div>
</div>   
<div class="container sect2"> 
  <div>
    <label>

     <input type="checkbox" name="">
     <span>Lorem</span>

   </label>
 </div>
 <div>
  <label>

   <input type="checkbox" name="">
   <span>Lorem</span>

 </label>
</div>
<div>
  <label>

   <input type="checkbox" name="">
   <span>Lorem</span>

 </label>
</div>     

</div> 
<div class="container"> 
  <div>
    <label>

     <input type="checkbox" name="">
     <span>Lorem</span>

   </label>
 </div>
 <div>
  <label>

   <input type="checkbox" name="">
   <span>Lorem</span>

 </label>
</div>
</div>       

<div class="container sect2"> 
  <div>
    <label>

     <input type="checkbox" name="">
     <span>Lorem</span>

   </label>
 </div>
 <div>
  <label>

   <input type="checkbox" name="">
   <span>Lorem</span>

 </label>
</div>
<div>
  <label>

   <input type="checkbox" name="">
   <span>Lorem</span>

 </label>
</div> -->    

<?php }  ?>
</div>    




<div class="container">  
   <input type="submit" class="btn" value="Next" >
<!--  <a href="#" type="submit" class="btn">Next</a> -->     
</div>  


</form>



</section>

<script>
/*  var limit = 3;
  $('input.single-checkbox').on('change', function(evt) {
    if($(this).siblings(':checked').length >= limit) {
      this.checked = false;
    }
  }); */
</script> 
</body>
</html>