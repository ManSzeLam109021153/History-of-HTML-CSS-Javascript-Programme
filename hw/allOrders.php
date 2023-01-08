<?php include('header.php'); 
include('functions.php'); 

//不是職員的不可以觀看訂單
if(!isStaff()) header("Location: /");
?>

<h1>Review Tourist Comments</h1>
<h2>Your email is:<?php echo $_SESSION['email'];?></h2>

<?php
//拿訪客的訂單資料
$orderData = file_get_contents('data.csv');
$orders = str_getcsv($orderData, "\r\n");

//顯示所有訂單
foreach($orders as $order)
{
    //拆解每一單的幾個資料
    $singleOrder = explode(",", $order);

    echo '<div class="order"><p>';
    echo 'Tourist Name : '.$singleOrder[1].'<br/>';
    echo 'Tourist e-mail : '.$singleOrder[2].'<br/>';
    echo 'Tourist Comments : '.$gems[$singleOrder[0]-1]['name'].' '.$singleOrder[3].'<br/>';
    echo 'Submit Time : '.$singleOrder[4].'<br/>';
    echo '</p></div>';
}
?>

<?php include('footer.php'); ?>