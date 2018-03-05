<?php 
    @require('../model/objects/user.php');

    // intatiate the user class and assign the properties from 
    // the posted values
    $user = new user();

    $user->username = $_POST['username'];

    $user->useremail = $_POST['useremail'];

    // if the checkbox is ticked it will return 1, if it is unchecked the it has a null value.
    // Line below handles the null value.
    ($_POST['admin'] == "1" ? $user->admin = 1 : $user->admin = 0);

    //call the save user method
    $user->saveuser();
?>