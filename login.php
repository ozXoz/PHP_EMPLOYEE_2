<?php
include('connection.php');
include('function.php');
global $_conn;


if(isset($_POST['submit'])){
$username=$_POST['username'];
$userpassword=$_POST['userpassword'];

$sql="SELECT * FROM emplooye where 'username' ='$username'and 'userpassword' = '$userpassword'";
$result=mysqli_query($_conn,$sql);

$row=mysqli_fetch_assoc($sql);
if($row['username'] == $username && $row['userpassword'] == $userpassword){
    redirect_to("display.php");
}else{
    redirect_to("login.php");

}



}



?>

<link rel="stylesheet" href="css/login.css">
<div class="container">
    <div class="screen">
        <div class="screen__content">
            <form class="login">
                <div class="login__field">
                    <i class="login__icon fas fa-user"></i>
                    <input type="text" name="username" class="login__input" placeholder="User name / Email">
                </div>
                <div class="login__field">
                    <i class="login__icon fas fa-lock"></i>
                    <input type="password" name="userpassword" class="login__input" placeholder="Password">
                </div>
                <button class="button login__submit" name="submit">
                    <span class="button__text">Log In Now</span>
                    <i class="button__icon fas fa-chevron-right"></i>
                </button>
            </form>
            <div class="social-login">
                <h3>log in via</h3>
                <div class="social-icons">
                    <a href="#" class="social-login__icon fab fa-instagram"></a>
                    <a href="#" class="social-login__icon fab fa-facebook"></a>
                    <a href="#" class="social-login__icon fab fa-twitter"></a>
                </div>
            </div>
        </div>
        <div class="screen__background">
            <span class="screen__background__shape screen__background__shape4"></span>
            <span class="screen__background__shape screen__background__shape3"></span>
            <span class="screen__background__shape screen__background__shape2"></span>
            <span class="screen__background__shape screen__background__shape1"></span>
        </div>
    </div>
</div>
