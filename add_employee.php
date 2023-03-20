<?php
include('connection.php');
include('function.php');
include('validation/validation_function.php');

function allow_letter($input){
    $result = "";
    foreach ($input as $xx) {

        if (ctype_alpha($xx)) {
            $result += $xx;
        }

    }
    echo $result;
}
global $_conn;
if(isset($_POST['submit'])){
    $fnamex = $_POST['fname'];
    $emp_id=$_POST['id'];
    $emp_fname=allow_letter($fnamex);
    $emp_lname=$_POST['lname'];
    $emp_email=$_POST['email'];


}


$sql="INSERT INTO `employee`('id', `fname`, `lname`, `email`) 
VALUES ('$emp_id','$emp_fname','$emp_lname','$emp_email')";

$result=mysqli_query($_conn,$sql);

if($result){
    redirect_to("display.php");
}

?>



<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

<div class="container">

    <form method="POST">
        <?php

        allow_number($_POST['id']);
        ?>
        <div class="form-group">
            <label for="employeeid">Employee ID</label>
            <input type="text" class="form-control" id="empid" name="id" ">
        </div>

        <div class="form-group">
            <label for="employeefName">First Name</label>
            <input type="text" class="form-control" id="empfname" name="fname" ">
        </div>
        <div class="form-group">
            <label for="employeelName">Last Name</label>
            <input type="text" class="form-control" id="emplname" name="lname" ">
        </div>
        <?php
        /*validate_email($_POST['email']);*/
        validate_email($_POST['email']);
        ?>
        <div class="form-group">
            <label for="employeemail">Email address</label>
            <input type="text" class="form-control" id="empemail" name="email" ">
        </div>

        <div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>


</div>