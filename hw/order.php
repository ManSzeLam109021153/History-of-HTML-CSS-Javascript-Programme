<?php include 'header.php'; ?>

<form action="/functions.php?op=createOrder" method="post">

  <label for="gem_name">Activity Name </label>
  <input type="hidden" id="gem_id" name="gem_id" value="<?php echo $_GET['gem_id'];?>">
  
  <h2><?php echo $gems[$_GET['gem_id']-1]['name'];?></h2>

  <label for="name">Name:</label>
  <input type="text" id="name" name="name"><br/>

  <label for="email">e-mail:</label>
  <input type="email" id="email" name="email" require><br/>

  <label for="quantity">Comments:</label>
  <input type="number" id="quantity" name="quantity" min="1" max="5" value="1">
  
  <br>
  <input class="buyBtn" type="submit" value="Submit">
</form> 

<?php include 'footer.php';?>