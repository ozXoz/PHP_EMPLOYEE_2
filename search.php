

<link rel="stylesheet" href="css/search.css">
<form method="post">
<div class="topnav">
    <a class="active" href="../../employee/display.php">Home</a>
    <a href="../../employee/add_employee.php">Add</a>
    <a href="../../employee/edit_employee.php">Edit / Update</a>
    <a href="../../employee/detail_employee.php">Details</a>
    <input type="text" placeholder="Search.." name="search">
    <button type="submit" name="submit-search">Search</button>
</div>
</form>
<?php

global $_conn;
?>

<?php
if(isset($_POST['submit-search'])){
    $search=mysqli_real_escape_string($_conn,$_POST['search']);
    $sql="SELECT * FROM employee WHERE 'id' LIKE '%%$search%'";
    $result=mysqli_query($_conn,$search);
    $query_result=mysqli_num_rows($result);
    if($query_result>0){
        while($row=mysqli_fetch_assoc($result)){
            /*echo " <tr>
             /*<td>".$row['id']."</td>
             <td>".$row['fname']."</td>
             <td>".$row['lname']."</td>
             <td>".$row['email']."</td>";*/

        }

    }else{
        echo "There is no records";
    }
}

?>
