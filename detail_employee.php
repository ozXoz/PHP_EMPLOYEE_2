<?php


include 'function.php';
include 'connection.php';



global $_conn;
global $row;



$id = $_GET['updateid'] ? $_GET['updateid'] : "";

?>

<p>Page ID :<?php echo $_GET['id']; ;?></p>
<input type="text" name="asda" value="<?php echo $_GET['id'];?>">

<p>First name:<?php echo $_GET['fname']; ;?></p>
<input type="text" name="fname" value="<?php echo $_GET['fname'];?>">