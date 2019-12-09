<?php
     require_once('config.php');
$pid=intval($_GET['pid']);?>

<!DOCTYPE html>
<html lang="en">
    <?php include('header.php');?>

  <body>
   <?php include('topnav.php');?> 
      
      <?php
     $pid=intval($_GET['pid']);
     $sql = "SELECT * from packages where id=:pid";
     $query = $dbh -> prepare($sql);
     $query -> bindParam(':pid', $pid, PDO::PARAM_STR);
     $query->execute();
     $results=$query->fetchAll(PDO::FETCH_OBJ);
     $cnt=1;
     if($query->rowCount() > 0)
     {
     foreach($results as $result)
     {	?><?php echo htmlentities($result->name);?><?php  }} ?>
      
       <?php include('footer.php');?> 

    
  

  <!-- loader -->
  
<?php include('loader.php');?> 
<?php include('scripts.php');?> 
  
    
  </body>
</html>