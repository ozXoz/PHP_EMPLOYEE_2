<?php
include('connection.php');
include('function.php');


global $_conn;
global $row;



$id = $_GET['updateid'] ? $_GET['updateid'] : "";





$sql="SELECT * FROM employee WHERE 'id'='$id'";
$result=mysqli_query($_conn,$sql);
$row=mysqli_fetch_assoc($result);



if(isset($_POST['submit'])){

    $id=$_POST['id'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];

    // Is That correct statement ???? //

    $sql="UPDATE `employee` SET `id`='$id',`fname`='$fname',`lname`='$lname',`email`='$email' WHERE 'id'='$id'";

    $result=mysqli_query($_conn,$sql);


    if($result){
        echo "Successfully Updated";
        redirect_to("display.php");
    }else{
        die("Connection Error:" .mysqli_connect_error());
    }

}

?>



<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">


<div class="container">

    <form method="POST">
        <div class="form-group">
            <label for="employeeid">Employee ID</label>
            <input type="text" class="form-control" id="empid" name="id" value="<?php echo  $id;?>">
        </div>
        <div class="form-group">
            <label for="employeefName">First Name</label>
            <input type="text" class="form-control" id="empfname" name="fname" value="<?php echo $fname;?>">
        </div>
        <div class="form-group">
            <label for="employeelName">Last Name</label>
            <input type="text" class="form-control" id="emplname" name="lname" value="<?php echo "";?>">
        </div>

        <div class="form-group">
            <label for="employeemail">Email address</label>
            <input type="text" class="form-control" id="empemail" name="email" ">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>


</div>