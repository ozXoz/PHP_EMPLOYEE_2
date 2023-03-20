<?php
 // WORKED !!! //
function validate_email($index){
    $email_regex = '^[\w\.=-]+@[\w\.-]+\.[\w]{2,3}$^';
    if (isset($_POST['index']) && empty(trim($_POST['index']))) {
        echo "Email is Required";
    } elseif (isset($_POST['email']) && !preg_match($email_regex, $_POST['email'])) {
        echo "Email is Required";

    }
    return $index;
}



function validate_empty($index){
    if(isset($_POST['id']) && empty($_POST['id'])){
        echo "value is not validate";
    }
    return $index;
}


/// ### It is not working ##### ////
/*function validate_letter($index){
    $index=$_POST['fname'];
   if(!ctype_alpha($index)){
   }else{
       echo "This is not valid information entered.";
   }
   return $index;
}*/


// ### Validate If its number ? Even if its empty or white space it is not allow to pass you
function allow_number($index){
        $validate_only_number=filter_var($index,FILTER_SANITIZE_NUMBER_INT);
        return $validate_only_number;
}

/*function allow_letter($index){

    $validate_only_letter=filter_var($index,FILTER_SANITIZE_STRING);
    return $validate_only_letter;
}*/


f/*unction allow_letter($input){
    $result = "";
    foreach ($input as $xx) {

        if (ctype_alpha($xx)) {
            $result += $xx;
        }

    }
    return $result;
}*/


?>