<?php
    //This is the php that is going to handle the registration of a user
    if(isset($_POST["submit"])){
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $email = $_POST["email"];
        $passwordCreate = $_POST["passwordCreate"];
        $passwordConfirm  = $_POST["passwordConfirm"];
        $errors = array();

        //checks if any of the form entry is empty
        if (empty($firstname) OR empty($lastname) OR empty($email) OR empty($passwordCreate) OR empty($passwordConfirm)) {
            array_push($errors, "please fill in all entries before submission"); //pushes an array to the end of the elements
        }
        //checks if the email is a valid address
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            array_push($errors, "Invalid valid");
        }
        //checks if the password has 8 characters
        if (strlen($password)<8){
            array_push($errors, "password must contain atleast 8 characters long");
        }
        //checks if the retyped password is the same as the newly created password
        if ($passwordCreate!==$passwordConfirm){
            array_push($errors, "password passwords do not match");
        }
        //counts the amount errors depending on how many the user has made 
        if (count($errors)>0) {
            foreach($errors as $error){
                echo $error;
            }
        }else{
            //later
        }
    }
?>