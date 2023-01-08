<?php include('header.php'); ?>

    <h1>Tourist Comments on <?php echo date('Y');?></h1>
    <h2><?php echo date('F');?></h2>

    <div class="flex-grid">
    <?php
    //顯示貨品
    foreach($gems as $key => $gem)
    {
        echo '<div class="col">
        <img src="/images/'.$gem['image'].'" />
        <p>
        English：'.$gem['name'].'<br>
        Chinese： '.$gem['price'].'<br>
        <a href="/order.php?gem_id='.$gem['gem_id'].'" class="buyBtn">Comments '.$gem['name'].'</a><br>
        </div>';
    }
    ?>
    </div>

<?php include('footer.php'); ?>
