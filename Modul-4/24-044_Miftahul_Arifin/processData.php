<?php 
require 'validate.inc';

$errors = [];
$errors = false;

if (isset($_POST))
    if (validateName($_POST, 'surname',$errors))
        echo 'Data OK!';
    else
        var_dump($errors);
?>