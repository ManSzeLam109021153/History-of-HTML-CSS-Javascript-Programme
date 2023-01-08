<?php
$op ='none';
if(isset($_GET['op'])) $op = $_GET['op'];

if($op=='createOrder')
{
    createOrder();
}
if($op=='checkLogin')
{
    checkLogin($_POST['email'],$_POST['password']);
}
if($op=='logout')
{
    logout();
}

function isStaff()
{
    return isset($_SESSION['email']);
}
function logout()
{
    session_start();
    session_destroy();
    header("Location: /");
}
function checkLogin($email, $password)
{
    $staffEmail     =   "jennylam.asiastd.109021153@gmail.com";
    $staffPassword  =   "Ker641030";

    if($email == $staffEmail && $staffPassword == $password)
    {
        //認證是一個職員 SESSION
        session_start();
        $_SESSION['email'] = $email;

        header("Location: /allOrders.php");
    }
    else
    {
        header("Location: /login.php");
    }
}
function createOrder(){
    /* echo $_POST['gem_id']."<br>";
    echo $_POST['name']."<br>";
    echo $_POST['email']."<br>";
    echo $_POST['quantity']."<br>";
    echo date('Y-m-d H:i:s')."<br>"; */

    //儲存訂單
    $myfile = fopen("data.csv", "a") or die("Not Successed");
    $data = $_POST['gem_id'].','.$_POST['name'].','.$_POST['email'].','.$_POST['quantity'].','.date('d-m-Y H:i:s')."\r\n";
    fwrite($myfile, $data);
    fclose($myfile);

    //轉變頁面
    header("Location: /order-complated.php");
}