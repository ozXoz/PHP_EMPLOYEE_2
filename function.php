<?php
include ('employee/header/header.php');
function redirect_to($location) {
    header("Location: " . $location);
    exit;
}



function button_delete(){
    global $_conn;
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $delete=mysqli_query($_conn,"DELETE FROM `employee` WHERE `id`='$id'");
        header("location:display.php");
    }


}

function find_subject_by_id($id) {
    global $_conn;

    $sql = "SELECT * FROM employee ";
    $sql .= "WHERE id='" . $id . "'";
    $result = mysqli_query($_conn, $sql);
    confirm_result_set($result);
    $subject = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $subject; // returns an assoc. array
}