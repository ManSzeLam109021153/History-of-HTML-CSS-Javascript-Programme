<?php include('header.php'); ?>
<form action="functions.php?op=checkLogin" method="post">
    <label for="email">e-mail:</label>
    <input type="email" id="email" name="email" require><br>
    
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" min="1"
    max="5">

    <br>
    <input type="submit" value="Login">
</form>
<?php include('footer.php'); ?>