<?php
include('connection.php');
include('function.php');
include ('../employee/header/header.php');
global $_conn;

// Display information from Database in Table.



$sql="SELECT * FROM employee";
$result=$_conn->query($sql);

// Delete Button  Function //

button_delete();




?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">


    <title>Display Employee</title>
</head>
<body>

<h1>Display Employee Information</h1>
<table class="table table-dark">
    <tr>
        <th scope="col">ID</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Email Address</th>
        <th scope="col">Add</th>
        <th scope="col">Edit / Update</th>
        <th scope="col">Delete</th>
        <th scope="col">Details</th>
    </tr>
    </thead>
    <tbody>
    <?php
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){

            echo "
                <tr>
             <td>".$row['id']."</td>
             <td>".$row['fname']."</td>
             <td>".$row['lname']."</td>
             <td>".$row['email']."</td>
             <td><a href='add_employee.php' class='btn btn-success'>Add</a> </td>
              <td><a href='edit_employee.php?updateid=".$row['id']."' class='btn btn-info'>Edit / Update</a> </td>
            <td><a href='display.php?id=".$row['id']."' class='btn btn-danger'>Delete</a></td>
                 </td>
                <td><a href='detail_employee.php?id=".$row['id']."'>Details</a> </td>
               </tr>    
                  ";
        }

    }
    ?>




    </tbody>


</table>


</body>
</html>