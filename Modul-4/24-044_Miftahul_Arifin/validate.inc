<?php 

    function validateName($field_list, $field_name, &$errors){
    if (!isset($field_list[$field_name]) || trim ($field_list[$field_name]) === '' ){
        $errors[] = "";
        return false;
    }

    $value = trim($field_list[$field_name]);
    $pattern = "/^[a-zA-Z'-]+$/"; // format nama (alfabet)
        
    if (!preg_match($pattern, $field_list[$field_name])){
        $errors[] = "error '$field_name' ";
        return false;
    }
    return true; 
    }
?>